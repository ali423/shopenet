<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Kavenegar;

class LoginController extends Controller
{
    public function create()
    {
        return view('login.index');
    }

    public function login(UserLoginRequest $request)
    {

        $user = User::query()->where('mobile', $request->get('mobile'));

        if (!$user->exists()) {

            $user_role = Role::query()->where('title', 'user')->firstOrFail();
            $code = rand(1000, 9999);
            $response = $this->sendSms($request->get('mobile'), $code);

            User::query()
                ->create([
                    'role_id' => $user_role->id,
                    'mobile' => $request->get('mobile'),
                    'code' => $code,
                ]);
            if ($response['return']['status'] != '200') {
                return redirect()->back()->withErrors('در حال حاظر ارسال پیامک ممکن نیست لطفا بعدا تلاش کنید');
            }
            return redirect(route('user.verification', [
                'mobile' => encrypt($request->get('mobile')),
            ]));
        }
        $user = $user->first();
        if (Carbon::now()->diffInSeconds($user->updated_at) < 60) {
            return redirect()->back()->withErrors('برای ارسال مجدد کد فعال سازی یک دقیقه صبر کنید');
        }
        $code = rand(1000, 9999);
        $response = $this->sendSms($request->get('mobile'), $code);
        $user->update([
            'code' => $code,
        ]);
        if ($response['return']['status'] != '200') {
            return redirect()->back()->withErrors('در حال حاظر ارسال پیامک ممکن نیست لطفا بعدا تلاش کنید');
        }
        return redirect(route('user.verification', [
            'mobile' => encrypt($request->get('mobile')),
        ]));
    }

    public function sendSms($num, $token)
    {
        try {
            $send = Http::post('https://api.kavenegar.com/v1/' . env('Sms_Key') . '/verify/lookup.json?receptor=' . $num . '&token=' . $token . '&template=verify');
            return $send;
        } catch (\Exception $e) {
            $data = (object)array();
            $data->withdrawError = ($e->getMessage());
            $send['return']['status'] = '500';
            $send['return']['message'] = json_encode($data);
            return $send;
        }
    }

    public function verification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $mobile = decrypt($request->get('mobile'));

        return view('login.verification', [
            'mobile' => encrypt($mobile),
        ]);
    }

    public function verificationStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|',
            'code' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $mobile = decrypt($request->get('mobile'));
        $user = User::query()->where('mobile', $mobile)->firstOrFail();
        if ($request->get('code') == $user->code) {
            if ($user->name == null) {
                $token = [
                    'mobile' => $mobile,
                    'code' => $request->get('code'),
                ];
                return redirect()->route('user.login.name',[
                    'token' => encrypt($token),
                ]);
            }
            auth()->login($user);
            if ($request->session()->has('link')) {
                $link=$request->session()->get('link');
                return redirect($link);
            }
            return redirect(route('home'));
        }
        return redirect()->back()->withErrors('کد تایید اشتباه است');
    }

    public function reSend(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $mobile = decrypt($request->get('mobile'));
        $user = User::query()->where('mobile', $mobile)->firstOrFail();
        if (Carbon::now()->diffInSeconds($user->updated_at) < 60) {
            return redirect()->back()->withErrors('برای ارسال مجدد کد حداقل یک دقیقه صبر کنید ');
        }
        $code = rand(1000, 9999);
        $response = $this->sendSms($mobile, $code);
        $user->update([
            'code' => $code
        ]);
        if ($response['return']['status'] != '200') {
            return redirect()->back()->withErrors('در حال حاظر ارسال پیامک ممکن نیست لطفا بعدا تلاش کنید');
        }
        return redirect(route('user.verification', [
            'mobile' => $request->get('mobile'),
        ]));
    }

    public function logout()
    {
        auth()->logout();
        return redirect(route('home'));
    }

    public function name(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        return view('login.name', [
            'token' => $request->get('token'),
        ]);
    }

    public function completeProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'token' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        try {
            $token = decrypt($request->get('token'));
            $mobile = $token['mobile'];
            $code = $token['code'];

        } catch (\Exception $e) {
            return redirect()->route('user.login')->withErrors('کد تایید اشتباه است');
        }
        $user = User::query()->where('mobile', $mobile)->firstOrFail();
        $user->update([
            'name' => $request->get('name'),
        ]);
        if ($code == $user->code) {
            auth()->login($user);
            if ($request->session()->has('link')) {
                $link=$request->session()->get('link');
                return redirect($link);
            }
            return redirect(route('home'));
        }
        return redirect()->route('user.login')->withErrors('کد تایید اشتباه است');
    }
}
