<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getPlanData($plan){
        $exists_plans=['a','b','c','d'];
        if (!in_array($plan,$exists_plans)){
            return [
                'status'=>false,
                'message'=>'لطفا پلن خود را انتخاب کنید ',
                ];
        }
        switch ($plan) {
            case "a":
                return [
                  'status'=>true,
                  'name'=>'طرح پایه ',
                  'amount'=>env('PLAN_A_AMOUNT'),
                    'symbol'=>'a',
                    'expire_date'=>Carbon::now()->addYear(),

                ];
            case "b":
                return [
                    'status'=>true,
                    'name'=>'طرح پیشرفته ',
                    'amount'=>env('PLAN_B_AMOUNT'),
                    'symbol'=>'b',
                     'expire_date'=>Carbon::now()->addYear(),
                ];
            case "c":
                return [
                    'status'=>true,
                    'name'=>'طرح حرفه ای ',
                    'amount'=>env('PLAN_C_AMOUNT'),
                    'symbol'=>'c',
                     'expire_date'=>Carbon::now()->addYear(),
                ];
            case "d":
                return [
                    'status'=>true,
                    'name'=>'طرح رایگان ',
                    'amount'=>env('PLAN_D_AMOUNT'),
                    'symbol'=>'d',
                    'expire_date'=>Carbon::now()->addDays(14),
                ];
        }
        return [
            'status'=>false,
            'message'=>'لطفا پلن خود را انتخاب کنید ',
        ];
    }
}
