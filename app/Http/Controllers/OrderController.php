<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderConfirmRequest;
use App\Models\Factor;
use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public function selectTemplate(Template $template, Request $request)
    {

        $request->session()->put('template', $template->id);
        return redirect(route('plan.index'))->with('successful', 'قالب با موفقیت انتخاب شد ، لطفا یک پلن انتخاب کنید .');
    }

    public function selectPlan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'plan' => 'required|in:a,b,c,d',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        if (!$request->session()->has('template')) {
            return redirect(route(url('/templates/list')))->withErrors(' ابتدا یک قالب انتخاب کنید ');
        }
        $request->session()->put('plan', $request->get('plan'));
        return redirect(route('order.confirm'));
    }

    public function orderConfirm(Request $request)
    {
        if (!$request->session()->has('template')) {
            return redirect(route(url('/templates/list')))->withErrors(' ابتدا یک قالب انتخاب کنید ');
        }
        if (!$request->session()->has('plan')) {
            return redirect(route('plan.index'))->withErrors(' ابتدا یک طرح انتخاب کنید ');
        }
        $template = Template::query()->findOrFail($request->session()->get('template'));
        $plan = $this->getPlanData($request->session()->get('plan'));
        if ($plan['status'] == false) {
            return redirect(route('plan.index'))->withErrors(' ابتدا یک طرح انتخاب کنید ');
        }
        return view('order.confirm', [
            'template' => $template,
            'plan' => $plan,
        ]);
    }

    public function destroy(Request $request)
    {
        if (!$request->session()->has('template')) {
            return redirect(route(url('/templates/list')))->withErrors(' ابتدا یک قالب انتخاب کنید ');
        }
        if (!$request->session()->has('plan')) {
            return redirect(route('plan.index'))->withErrors(' ابتدا یک طرح انتخاب کنید ');
        }
        $request->session()->forget('template');
        $request->session()->forget('plan');
        return redirect(route('home'));
    }

    public function orderConfirmStore(OrderConfirmRequest $request)
    {
        if (!$request->session()->has('template')) {
            return redirect(route(url('/templates/list')))->withErrors(' ابتدا یک قالب انتخاب کنید ');
        }
        if (!$request->session()->has('plan')) {
            return redirect(route('plan.index'))->withErrors(' ابتدا یک طرح انتخاب کنید ');
        }
        $template = Template::query()->findOrFail($request->session()->get('template'));
        $plan = $this->getPlanData($request->session()->get('plan'));
        if ($plan['status'] == false) {
            return redirect(route('plan.index'))->withErrors(' ابتدا یک طرح انتخاب کنید ');
        }
        $check_factor_number_unique = true;
        while ($check_factor_number_unique) {
            $factor_number = rand(1000000, 9999999);
            $check_factor_number_unique = Factor::query()->where('number', $factor_number)->exists();
        }
        $factor = Factor::query()->create([
            'user_id' => auth()->user()->id,
            'plan'=> $plan['symbol'],
            'template_id'=> $template->id,
            'number' => $factor_number,
            'about' => 'قالب ' . $template->title . ' + پلن ' . $plan['name'],
            'amount' => $plan['amount'],
        ]);
        $request->session()->forget('template');
        $request->session()->forget('plan');
        return redirect(route('factor.show', $factor));
    }
}
