<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderConfirmRequest;
use App\Models\Factor;
use App\Models\Service;
use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public function selectTemplate(Template $template, Request $request)
    {
        $request->session()->forget('service');
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
        if (!$request->session()->has('template') && !$request->session()->has('service')) {
            return redirect(route(url('/templates/list')))->withErrors(' ابتدا یک قالب انتخاب کنید ');
        }
        $request->session()->put('plan', $request->get('plan'));
        return redirect(route('order.confirm'))->with('successful', 'طرح شما با موفقیت انتخاب شد .');
    }

    public function orderConfirm(Request $request)
    {

        if ($request->session()->has('template') && $request->session()->has('service')) {
            return redirect(route('home'))->withErrors('خطایی رخ داده ، دوباره تلاش کنید');
        }
        if (!$request->session()->has('template') && !$request->session()->has('service') ) {
            return redirect(route(url('/templates/list')))->withErrors(' ابتدا یک قالب انتخاب کنید ');
        }
        if (!$request->session()->has('plan')) {
            return redirect(route('plan.index'))->withErrors(' ابتدا یک طرح انتخاب کنید ');
        }
        $plan = $this->getPlanData($request->session()->get('plan'));
        if ($plan['status'] == false) {
            return redirect(route('plan.index'))->withErrors(' ابتدا یک طرح انتخاب کنید ');
        }
        if ($request->session()->has('service')){
            $service=Service::query()->findOrFail($request->session()->get('service'));
            return view('order.confirm', [
                'service' => $service,
                'plan' => $plan,
                'template' => $service->template,
            ]);
        }
        $template = Template::query()->findOrFail($request->session()->get('template'));
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
        if (!$request->session()->has('template') && !$request->session()->has('service')) {
            return redirect(route(url('/templates/list')))->withErrors(' ابتدا یک قالب انتخاب کنید ');
        }
        if (!$request->session()->has('plan')) {
            return redirect(route('plan.index'))->withErrors(' ابتدا یک طرح انتخاب کنید ');
        }
        $plan = $this->getPlanData($request->session()->get('plan'));
        if ($plan['status'] == false) {
            return redirect(route('plan.index'))->withErrors(' ابتدا یک طرح انتخاب کنید ');
        }
        $check_factor_number_unique = true;
        while ($check_factor_number_unique) {
            $factor_number = rand(1000000, 9999999);
            $check_factor_number_unique = Factor::query()->where('number', $factor_number)->exists();
        }
        if ($request->get('extension') == true){
            $service=Service::query()->findOrFail($request->session()->get('service'));
            $template=$service->template;
            $factor = Factor::query()->create([
                'user_id' => auth()->user()->id,
                'plan'=> $plan['symbol'],
                'extension_service_id'=>$service->id,
                'template_id'=> $template->id,
                'number' => $factor_number,
                'about' => 'قالب ' . $template->title . ' + پلن ' . $plan['name'],
                'amount' => $plan['amount'],
            ]);
        }else{
            $template = Template::query()->findOrFail($request->session()->get('template'));
            $factor = Factor::query()->create([
                'user_id' => auth()->user()->id,
                'plan'=> $plan['symbol'],
                'template_id'=> $template->id,
                'number' => $factor_number,
                'about' => 'قالب ' . $template->title . ' + پلن ' . $plan['name'],
                'amount' => $plan['amount'],
            ]);
        }
        $request->session()->forget('template');
        $request->session()->forget('plan');
        return redirect(route('factor.show', $factor));
    }

    public function extension(Request $request,Service $service){
        $request->session()->forget('template');
        $request->session()->put('service', $service->id);

        return redirect(route('plan.index'))->with('successful', 'یک پلن برای تمدید سرویس انتخاب کنید ');
    }

}
