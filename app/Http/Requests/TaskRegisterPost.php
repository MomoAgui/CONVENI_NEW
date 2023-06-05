<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Task as TaskModel;

class TaskRegisterPost extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name'=>['required','max:128'],
            'allergy'=>['required','max:128'],
            'kcal'=>['required'],
            'suger'=>['required','between:0,99.99'],
            'solt'=>['required','between:0,99.99'],
            'detail'=>['max:128']
    ];
    }
}


