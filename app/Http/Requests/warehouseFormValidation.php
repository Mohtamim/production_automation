<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class warehouseFormValidation extends FormRequest
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
            'warehouseName'=>'required|string|regex:/^[\pL\s\-]+$/u',
             'address'=>'required|string',


        ];
    }

    public function messages()
    {
        return [
            'warehouseName.required' => 'Please Enter a warehouse Name',
            'warehouseName.string' => 'Warehouse Name Must be 10 Char',
            'warehouseName.regex'=>'Number is not allowed',
            'address.required'=>'Please Enter a warehouse Address',
            'address.string' => 'Address Must be 50 Char'
        ];
    }
}
