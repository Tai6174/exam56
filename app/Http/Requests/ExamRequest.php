<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
{

    public function authorize()
    {
        return $this->user()->can('建立測驗');
    }

    public function rules()
    {
        return [
            'title' => 'required|min:2|max:191',
        ];
    }

    public function messages()
    {
        return [
            'required' => '「:attribute」為必填欄位',
            'min'      => '「:attribute」至少要 :min 個字',
            'max'      => '「:attribute」最多只能 :max 個字',
        ];
    }
    public function attributes()
    {
        return [
            'title' => '測驗標題',
        ];
    }

}
