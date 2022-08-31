<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class catsFormValidation extends FormRequest
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
            'catName'=>'required|string|regex:/^[\pL\s\-]+$/u',
             'catTitle'=>'required|string',



        ];
    }

    public function messages()
    {
        return [
            'catName.required' => 'Please Enter a categoryName ',
            'catName.string' => 'Number is not allowed',
            'catName.regex' => 'Please Enter a categoryName',
            'catTitle.required' => 'Please Enter a category Title',
            'catTitle.string' => 'Number is not allowed',

        ];
    }
}
