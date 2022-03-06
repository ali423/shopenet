<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use App\Models\Factor;
use App\Models\Payment;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }

    public function paymentCallBack(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Status' => 'required|in:OK,NOK',
            'Authority' => 'required|exists:factors,payment_id',
        ]);
        if ($validator->fails()) {
            return redirect(route('home'))->withErrors('پرداخت موفقیت آمیز نبود ، در صورت کسر وجه ، حداکثر پس از 72 ساعت به حساب شما عودت خواهد شد ');
        }

        $factor_callback = Factor::query()->where('payment_id', $request->get('Authority'));
        if (!$factor_callback->exists()) {
            return redirect(route('home'))->withErrors('پرداخت موفقیت آمیز نبود ، در صورت کسر وجه ، حداکثر پس از 72 ساعت به حساب شما عودت خواهد شد ');
        }
        $factor_callback = $factor_callback->first();
        if ($request->get('Status') == 'NOK') {
            return redirect(route('factor.show', $factor_callback))->withErrors('پرداخت موفقیت آمیز نبود');
        }
           if (isset($factor_callback->discount_id)){
               $amount=$factor_callback->new_amount*10;
           }else{
               $amount=$factor_callback->amount*10;
           }
        try {
            $response_json = Http::withHeaders([
                'accept' => 'application/json',
                'Content-Type' => 'application/json',
            ])->post('https://api.zarinpal.com/pg/v4/payment/verify.json', [
                'merchant_id' => env('ZARIN_PAL_KEY'),
                'authority' => $factor_callback->payment_id,
                'amount' => $amount,
            ]);
            $response = json_decode($response_json, true);
            if (!isset($response['data']['code']) && isset($response['errors']['code'])){
                Payment::query()->create([
                    'factor_id' => $factor_callback->id,
                    'code' => $response['errors']['code'] ?? null,
                    'message'=>$response['errors']['message'] ?? null,
                ]);
                return redirect(route('payment.reject', $factor_callback));
            }
            if (!isset($response['data']['code'])  || $response['data']['code'] != '100') {
                return redirect(route('payment.reject', $factor_callback));
            }

            DB::transaction(function () use ($request, $response, $factor_callback
            ) {
                Payment::query()->create([
                    'factor_id' => $factor_callback->id,
                    'code' => $response['data']['code'] ?? null,
                    'ref_id' => $response['data']['ref_id']?? null,
                    'card_pan' =>$response['data']['card_pan'] ?? null,
                    'card_hash' => $response['data']['card_hash'] ?? null,
                    'fee_type' =>$response['data']['fee_type'] ?? null,
                    'fee' => $response['data']['fee'] ?? null,
                ]);
                $plan = $this->getPlanData($factor_callback->plan);
                if (isset($factor_callback->extension_service_id)) {
                    $service = Service::query()->findOrFail($factor_callback->extension_service_id);
                    $service->update([
                        'template_id' => $factor_callback->template_id,
                        'plan' => $factor_callback->plan,
                        'status' => 'activating',
                        'expire_date' => $plan['expire_date'],
                    ]);
                } else {
                    $service = Service::query()->create([
                        'user_id' => auth()->user()->id,
                        'template_id' => $factor_callback->template_id,
                        'plan' => $factor_callback->plan,
                        'status' => 'activating',
                        'expire_date' => $plan['expire_date'],
                    ]);
                }
                $factor_callback->update([
                    'status' => 'paid',
                    'payment_status' => $response['data']['code'] ?? null,
                    'service_id' => $service->id,
                ]);

            });
            event(new OrderCreated($factor_callback));
            return redirect(route('payment.success', $factor_callback));
        } catch (\Exception $e) {
            $data = (object)array();
            $data->withdrawError = ($e->getMessage());
            return redirect(route('payment.reject', $factor_callback));
        }
    }

    public function success(Factor $factor = null)
    {
        return view('payment.success', [
            'factor_number' => $factor->number,
        ]);
    }

    public function freePlanSuccess()
    {
        return view('payment.success');
    }

    public function reject(Factor $factor)
    {
        return view('payment.reject', [
            'factor_number' => $factor->number,
        ]);
    }
}
