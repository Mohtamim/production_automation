<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class buyersFormValidation extends FormRequest
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
            'buyerCode'=>'required|numeric',
            'buyerName'=>'required|string',
            'email'=>'required|string',
            'phone'=>'required',
            'img'=>'required',
            'buyerAddress'=>'required',
            'buyerbankAddress'=>'required',
            'country'=>'required|string',
            'balance'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return[
        'buyerCode.required'=>'Enter a Buyer Code*',
        ];
    }
}
