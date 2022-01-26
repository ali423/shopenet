<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Factor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('factor.index',[
            'factors'=>auth()->user()->factors()->orderBy('id', 'DESC')->get(),
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factor  $factor
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function show(Factor $factor)
    {
        if ($factor->user->id != auth()->user()->id){
            return redirect()->back()->withErrors('شما این دسترسی را ندارید .');
        }
        return view('factor.show',[
            'factor'=>$factor,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function edit(Factor $factor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factor $factor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factor $factor)
    {
        //
    }

    public function pay(Factor $factor,Request $request)
    {
        $discount_code=$request->get('discount_code');
        if (isset($discount_code) && $discount_code != null){
            $discount = Discount::query()->where('code', $discount_code);
            if (!$discount->exists()) {
                return redirect()->back()->withErrors('کد تخفیف موجود نیست');
            }

            $discount_controller=new DiscountController();
            $res=$discount_controller->DiscountApply($discount->first(),$factor);
            if (!$res['success'] == true){
                return redirect()->back()->withErrors($res['message']);
            }
            $discount_check=true;
            $amount=$res['new_amount']*10;

        }else{
            $discount_check=false;
            $amount=$factor->amount*10;
        }
        if ($factor->user_id != auth()->user()->id) {
            return redirect()->back()->withErrors('شما این دسترسی را ندارید');
        }
        if ($factor->status != 'awaiting_payment') {
            return redirect()->back()->withErrors('این الکتور قابل پرداخت نیست ');
        }

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-KEY' => env('ID_PAY_KEY'),
                'X-SANDBOX' => '1',
            ])->post('https://api.idpay.ir/v1.1/payment', [
                'amount' => $amount,
                'order_id' => $factor->number,
                'desc' => $factor->description,
                'name'=>$factor->user->name,
                'phone'=>$factor->user->mobile,
                'callback'=>env('APP_URL') . '/factor/payment-callback',
            ]);
           $status= $response->status();
            $response = json_decode($response, true);
            if ($status == '201'){
                if ($discount_check){
                    $factor->update([
                        'payment_id' => $response['id'],
                    'discount_id'=>$discount->first()->id ?? null,
                    ]);
                }else{
                    $factor->update([
                        'payment_id' => $response['id'],
                    ]);
                }
                return redirect($response['link']);
            }else{
                return redirect()->back()->withErrors('ارتباط با درگاه پرداخت ممکن نیست ، لطفا مجددا تلاش کنید');
            }
        } catch (\Exception $e) {
            $data = (object)array();
            $data->withdrawError = ($e->getMessage());
            $response = $data;
            return  redirect()->back()->withErrors('ارتباط با درگاه پرداخت ممکن نیست ، لطفا مجددا تلاش کنید');
        }
    }

    public function cancel(Factor $factor){
        if ($factor->user->id!= auth()->user()->id){
            return redirect()->back()->withErrors('شما این دسترسی را ندارید');
        }
        $factor->update([
           'status'=>'canceled',
        ]);
        return redirect(route('factor.index'))->with('successful', 'فاکتور با موفقیت لغو شد .');
    }
}
