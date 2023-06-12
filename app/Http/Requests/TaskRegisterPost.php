<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Task as TaskModel;

class TaskRegisterPost extends FormRequest
{
     public function authorize()
    {
        return true;
    }
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
           'image' => ['required','mimes:jpeg,jpg,png','max:2048'],
            'path'=>['max:2048'],
            'allergy'=>['required','max:128'],
            'kcal'=>['required','integer'],
            'suger'=>['required','between:0,99.99'],
            'solt'=>['required','between:0,99.99'],
            'detail'=>['required','max:128'],
            'conveni_num'=>['required'],
      
        ];
      
       
    }
    public function messages()
{
    return [
        'name.required' => '商品名は必須項目です．',
        'kcal.integer' => '熱量(kcal)は整数でご入力ください．',
        'suger.between:0,99.99' => '糖質は小数点を含む数値でご入力ください．',
        'solt.between:0,99.99'=>'食塩相当量は小数点を含む数値でご入力ください．',
        
          
    ];
}
    
}


