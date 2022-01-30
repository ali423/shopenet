<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AvailableServiceMiddleware
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
        $service=auth()->user()->service()->latest()->first();
        if (isset($service)){
            if ($service->status == 'activating' || $service->status == 'expired'){
                if ($service->plan !='d' ){
                    if (!$request->session()->has('old_service')){
                        $request->session()->forget('template');
                        $request->session()->forget('plan');
                        $request->session()->forget('old_service');
                        return redirect(route('dashboard'))->withErrors('شما درحال حاظر یک سرویس فعال دارید');
                    }
                }
                if ($service->plan =='d' && $request->session()->get('plan') =='d'){
                    $request->session()->forget('template');
                    $request->session()->forget('plan');
                    $request->session()->forget('old_service');
                    return redirect(route('dashboard'))->withErrors('شما قبلا از سرویس رایگان استفاده کرده اید');
                }
            }
        }
        return $next($request);
    }
}
