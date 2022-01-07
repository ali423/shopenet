<?php

namespace App\Http\Middleware;

use App\Models\Template;
use Closure;
use Illuminate\Http\Request;

class SelectPlanMiddleware
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
        if (!$request->session()->has('template')){
            return redirect(route('select.template'))->withErrors('ابتدا یک قالب را انتخاب کنبد ');
        }
        $checkTemplate= Template::query()->where('id',$request->session()->get('template'))->exists();
        if (!$checkTemplate){
            return redirect(route('select.template'))->withErrors('ابتدا یک قالب را انتخاب کنبد ');
        }
        return $next($request);
    }
}
