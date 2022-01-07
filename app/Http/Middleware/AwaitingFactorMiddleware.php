<?php

namespace App\Http\Middleware;

use App\Models\Factor;
use Closure;
use Illuminate\Http\Request;

class AwaitingFactorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

       $user=auth()->user();
     $factor= $user->factors()->where('status','awaiting_payment')->exists();
       if ($factor){
           return redirect(route('factor.show',$factor))->withErrors('شما یک صورت حساب در انتظار تعیین وضعیت دارید ');
       }
        return $next($request);
    }
}
