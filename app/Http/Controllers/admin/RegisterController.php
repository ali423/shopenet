<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
        return view('admin.login.index');
    }

    public function login(AdminLoginRequest $request){
        $userCheck = User::query()->where('email', $request->get('email'))->exists();
        if (!$userCheck) {
            return redirect('/')->withErrors('کابری با این ایمیل وجود ندارد ');
        }
        $user = User::query()->where('email', $request->get('email'))->first();
        if (Hash::check($request->get('password'), $user->password)) {

                auth()->login($user);
                return redirect(route('admin.dashboard'));
            }
        return redirect()->back()->withErrors(' رمز صحیح نیست');
    }

    public function destroy(){
        auth()->logout();
        return redirect('/');
    }
}
