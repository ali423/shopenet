<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Factor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Morilog\Jalali\Jalalian;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.discount.index', [
            'discounts' => Discount::query()->orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'percent' => 'required|numeric|gt:1|max:100',
            'code' => 'required|unique:discounts,code',
            'expired_at' => 'required|date',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        Discount::query()->create([
            'title' => $request->get('title'),
            'code' => $request->get('code'),
            'number' => $request->get('number'),
            'expired_at' => $request->get('expired_at'),
            'plan' => $request->get('plan'),
            'percent' => $request->get('percent'),
        ]);
        return redirect(route('discount.index'))->with('successful', 'اطلاعات  ثبت شد .');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Discount $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Discount $discount
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        return view('admin.dashboard.discount.edit', [
            'discount' => $discount,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Discount $discount
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Discount $discount)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'code' => 'required',
            'percent' => 'required|numeric|gt:1|max:100',
            'expired_at' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $check_unique_code = Discount::query()->where('code', $request->get('code'))->first();
        if (isset($check_unique_code) && $check_unique_code->id != $discount->id) {
            return redirect()->back()->withErrors('کد تکراری است .');
        }
        $discount->update([
            'title' => $request->get('title'),
            'code' => $request->get('code'),
            'number' => $request->get('number'),
            'expired_at' => $request->get('expired_at'),
            'plan' => $request->get('plan'),
            'percent' => $request->get('percent'),
        ]);
        return redirect(route('discount.index'))->with('successful', 'اطلاعات  ویرایش شد .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Discount $discount
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Discount $discount)
    {
        if ($discount->factors()->exists()) {
            return redirect()->back()->withErrors('این کد در چندین فاکتور درج شده است  .');
        }
        $discount->delete();
        return redirect(route('discount.index'))->with('successful', 'اطلاعات  حذف شد .');
    }

    public function checkDiscount(Request $request)
    {

        $discount = Discount::query()->where('code', $request->get('discount'));
        $factor = Factor::query()->where('id', $request->get('factor'));
        if (!$discount->exists() || !$factor->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'کد تخفیف موجود نیست'
            ]);
        }
        $res=$this->DiscountApply($discount->first(),$factor->first());
        if (!$res['success'] == true){
            return response()->json([
                'success' => false,
                'message' =>$res['message']
            ]);
        }
        return response()->json([
            'success' => true,
            'message' =>$res['percent'].' درصد تخفیف برای شما محاسبه شد',
            'new_amount'=>$res['new_amount'],
            'old_amount'=>$res['old_amount'],
        ]);
    }

    public function DiscountApply(Discount $discount,Factor $factor){
        $activate_plans=explode(',',$discount->plan);
        if (!in_array($factor->plan,$activate_plans)){
            return [
                'success' => false,
                'message' => 'کد تخفیف برای محصول مشخص شده قابل استفاده نیست'
            ];
        }
        if ($factor->number == 0){
            return [
                'success' => false,
                'message' => 'تعداد کد تخفیف های قابل استفاده به پایان رسیده است'
            ];
        }
        $date = \Morilog\Jalali\Jalalian::fromFormat('Y-m-d', "$discount->expired_at");

        if (!$date->greaterThanOrEqualsTo(Jalalian::now())){
            return [
                'success' => false,
                'message' => 'کد تخفیف منقضی شده است'
            ];
        }
//        if (auth()->user()->factors()->where('discount_id',$discount->id)->exists()){
//            return [
//                'success' => false,
//                'message' => 'شما قبلا از این کد استفاده کرده اید.'
//            ];
//        }
        $new_amount =round($factor->amount - (($factor->amount * $discount->percent)/100),2);
        return [
            'success' => true,
            'new_amount'=>$new_amount,
            'percent'=>$discount->percent,
            'old_amount'=>$factor->amount,
        ];
    }
}
