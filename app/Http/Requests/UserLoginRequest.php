<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
//            'name'=>['required','persian_alpha'],
            'mobile'=>['required','ir_mobile:zero'],
        ];
    }
    public function messages()
    {
        return [
//            'name.required'=>'نام را وارد کنید ',
//            'name.persian_alpha'=>'نام باید فارسی باشد ',
            'mobile.required'=>'شماره موبایل را وارد کنید ',
            'mobile.ir_mobile'=>'فرمت شماره موبایل صحیح نیست ',
        ];
    }
}
