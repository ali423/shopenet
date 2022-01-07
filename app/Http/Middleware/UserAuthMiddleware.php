<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuthMiddleware
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
        if (!auth()->check()){
            $request->session()->put('link', url()->previous());
            return redirect(route('user.login'))->withErrors('ابتدا وارد حساب کاربری خود شوید ');
        }
        return $next($request);
    }
}
