<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'text'=>'required',
            'content'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'اسم الشركة مطلوب',
            'text.required'=>'عنوان الشركة مطلوب',
            'content.required'=>'رقم الهاتف الخاص بالشركة مطلوب',
        ];
    }
}
