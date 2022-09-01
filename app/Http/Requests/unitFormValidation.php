<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class unitFormValidation extends FormRequest
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
            'name'=>'required|string|regex:/^[\pL\s\-]+$/u',
            'status'=>'required|string',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please Enter a unit Name',
            'name.string' => 'Unit Name Must be 10 Char',
            'name.regex'=>'Number is not allowed',
            'status.required'=>'Please Enter a warehouse status',
            'status.string' => 'Address Must be 50 Char'
        ];
    }
}
