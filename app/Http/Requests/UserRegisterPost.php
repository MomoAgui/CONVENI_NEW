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
            'password'=>['required','confirm','max:72'],
            'age'=>['string','max:10'],
            'birth-year'=>['integer'],
            'birth-month'=>['integer'],
            'birth-day'=>['integer'],
        ];
    }
}


