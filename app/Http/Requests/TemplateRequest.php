<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TemplateRequest extends FormRequest
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
            'title'=>['required','unique:templates,title'],
            'sort'=>['required','integer','unique:templates,sort'],
            'slug'=>['required','unique:templates,slug'],
            'description'=>['required'],
            'about'=>['required'],
            'icon'=>['required','mimes:jpg,svg,png,jpeg','max:2048'],
            'img'=>['required','mimes:jpg,svg,png,jpeg','max:2048'],
        ];
    }
}
