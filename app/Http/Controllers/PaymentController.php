<?php

namespace App\Http\Controllers;

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
            'status' => 'required',
            'track_id' => 'required',
            'id' => 'required|exists:factors,payment_id',
            'order_id' => 'required|exists:factors,number',
        ]);
        if ($validator->fails()) {
            return redirect(route('home'))->withErrors('پرداخت موفقیت آمیز نبود ، در صورت کسر وجه ، حداکثر پس از 72 ساعت به حساب شما عودت خواهد شد ');
        }
        $factor_callback = Factor::query()->where('payment_id', $request->get('id'))->where('number', $request->get('order_id'));
        if (!$factor_callback->exists()) {
            return redirect(route('home'))->withErrors('پرداخت موفقیت آمیز نبود ، در صورت کسر وجه ، حداکثر پس از 72 ساعت به حساب شما عودت خواهد شد ');
        }
        $factor_callback = $factor_callback->first();
        if ($request->get('status') != 10) {
            $factor_callback->update([
                'payment_status' => $request->get('status'),
                'idpay_track_id' => $request->get('track_id'),
            ]);
            return redirect(route('payment.reject', $factor_callback));
        }

        try {
            $response_json = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-KEY' => env('ID_PAY_KEY'),
                'X-SANDBOX' => '1',
            ])->post('https://api.idpay.ir/v1.1/payment/verify', [
                'id' => $factor_callback->payment_id,
                'order_id' => $factor_callback->number,
            ]);
            $status = $response_json->status();
            $response = json_decode($response_json, true);
            if ($status != '200') {
                return redirect(route('payment.reject', $factor_callback));
            }

            DB::transaction(function () use ($request, $response, $factor_callback
            ) {
                $factor = Factor::query()->where('payment_id', $response['id'])->where('number', $response['order_id'])->where('amount', $response['amount'] / 10)->first();
                if ($factor_callback->id != $factor->id) {
                    return redirect(route('home'))->withErrors('پرداخت موفقیت آمیز نبود ، در صورت کسر وجه ، حداکثر پس از 72 ساعت به حساب شما عودت خواهد شد ');
                }
                Payment::query()->create([
                    'factor_id' => $factor->id,
                    'status' => $response['status'] ?? null,
                    'idpay_track_id' => $response['track_id'] ?? null,
                    'payment_track_id' => $response['payment']['track_id'] ?? null,
                    'payment_id' => $response['id'] ?? null,
                    'order_id' => $response['order_id'] ?? null,
                    'amount' => $response['amount'] ?? null,
                    'payment_amount' => $response['payment']['amount'] ?? null,
                    'date' => $response['date'] ?? null,
                    'card_no' => $response['card_no'] ?? null,
                    'pay_date' => $response['payment']['date'] ?? null,
                    'verify_date' => $response['verify']['date'] ?? null,
                    'error_message' => $response['error_message'] ?? null,
                    'error_code' => $response['error_code'] ?? null,
                ]);
                if ($response['status'] == 100) {
                    $plan = $this->getPlanData($factor->plan);
                    $service = Service::query()->create([
                        'user_id' => auth()->user()->id,
                        'template_id' => $factor->template_id,
                        'plan' => $factor->plan,
                        'status' => 'activating',
                        'expire_date' => $plan['expire_date'],
                    ]);
                    $factor->update([
                        'status' => 'paid',
                        'payment_status' => $response['status'] ?? null,
                        'idpay_track_id' => $response['track_id'] ?? null,
                        'service_id' => $service->id,
                    ]);

                }

            });
            if ($response['status'] == 100) {
                return redirect(route('payment.success', $factor_callback));
            }
            return redirect(route('payment.reject', $factor_callback));
        } catch (\Exception $e) {
            $data = (object)array();
            $data->withdrawError = ($e->getMessage());
            return redirect(route('payment.reject', $factor_callback));
        }
    }

    public function success(Factor $factor)
    {
        return view('payment.success', [
            'factor_number' => $factor->number,
        ]);
    }

    public function reject(Factor $factor)
    {
        return view('payment.reject', [
            'idpay_track_id' => $factor->idpay_track_id,
        ]);
    }
}
