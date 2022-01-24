<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            'code' => 'required|unique:discounts,code',
            'expired_at' => 'required',
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
            'expired_at' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $check_unique_code=Discount::query()->where('code',$request->get('code'))->first();
        if (isset($check_unique_code) && $check_unique_code->id != $discount->id){
            return redirect()->back()->withErrors('کد تکراری است .');
        }
        $discount->update([
            'title' => $request->get('title'),
            'code' => $request->get('code'),
            'number' => $request->get('number'),
            'expired_at' => $request->get('expired_at'),
            'plan' => $request->get('plan'),
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
        if ($discount->factors()->exists()){
            return redirect()->back()->withErrors('این کد در چندین فاکتور درج شده است  .');
        }
        $discount->delete();
        return redirect(route('discount.index'))->with('successful', 'اطلاعات  حذف شد .');
    }
    public function checkDiscount(Request $request){
$discount=Discount::query()->where('code',$request->get('discount'));
if (!$discount->exists()){
    return response()->json([
        'success'=>false,
        'message'=>'کد تخفیف موجود نیست'
    ]);
}
        return response()->json(['success'=>$request->get('discount')]);
    }
}
