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
            'suger'=>['required','float'],
            'solt'=>['required','float'],
            'detail'=>['max:128'],
        ];
    }
}
