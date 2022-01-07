<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditTemplateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>['required'],
            'sort'=>['required','integer'],
            'slug'=>['required'],
            'description'=>['required'],
            'about'=>['required'],
            'icon'=>['mimes:jpg,svg,png,jpeg','max:2048'],
            'img'=>['mimes:jpg,svg,png,jpeg','max:2048'],
        ];
    }
}
