<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;


class UserRegisterPost extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>['required','max:128'],
            'email'=>['required','email','max:254'],
            'password'=>['required','confirmed','max:72'],
            'birth_year'=>['required','integer','date_format:Y'],
            'birth_month'=>['required','between:1,12','date_format:m'],
            'birth_day'=>['required','between:1,31','date_format:d'],
        ];
    }
}