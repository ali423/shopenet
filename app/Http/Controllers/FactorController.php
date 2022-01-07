<?php

namespace App\Http\Controllers;

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
            'factors'=>auth()->user()->factors,
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

    public function pay(Factor $factor)
    {
        if ($factor->user_id != auth()->user()->id) {
            return $this->sendError('شما این دسترسی را ندارید');
        }
        if ($factor->status != 'awaiting_payment') {
            return $this->sendError('فاکتور قابل پرداخت نیست');
        }

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-API-KEY' => env('ID_PAY_KEY'),
                'X-SANDBOX' => '1',
            ])->post('https://api.idpay.ir/v1.1/payment', [
                'amount' => $factor->amount*10,
                'order_id' => $factor->number,
                'desc' => $factor->description,
                'name'=>$factor->user->name,
                'phone'=>$factor->user->mobile,
                'callback'=>env('APP_URL') . '/factor/payment-callback',
            ]);
           $status= $response->status();
            $response = json_decode($response, true);
            if ($status == '201'){
                $factor->update([
                    'payment_id' => $response['id'],
                ]);
                return redirect($response['link']);
            }else{
                return redirect()->back()->withErrors($response['error_message']);
            }
        } catch (\Exception $e) {
            $data = (object)array();
            $data->withdrawError = ($e->getMessage());
            $response = $data;
            return  redirect()->back()->withErrors($response);
        }
    }
}
