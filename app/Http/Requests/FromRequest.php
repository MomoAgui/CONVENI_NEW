<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FromRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required','email'],
            'messgae' => ['max:4000'],
        ];
    }
}
