<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class mainOrderFormValidation extends FormRequest
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
            'productName'=>'required|string',
            'quantity'=>'required|numeric',
            'unitPrice'=>'required|numeric',
            'totalPrice'=>'required|numeric',
            'status'=>'required|numeric',
            'delivery_date'=>'required'
        ];
    }
}
