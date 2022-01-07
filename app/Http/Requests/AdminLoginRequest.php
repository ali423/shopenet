<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>['required','exists:users,email'],
            'password'=>['required'],
        ];
    }
    public function messages()
    {
        return [
            'password.required'=>'پسورد را وارد کنید ',
            'email.required'=>'ایمیل را وارد کنید ',
            'email.exists'=>'کاربری با این نام وجود ندارد ',
        ];
    }
}
