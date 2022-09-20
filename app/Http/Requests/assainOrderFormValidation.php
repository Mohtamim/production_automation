<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class assainOrderFormValidation extends FormRequest
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

         'status'=>'required',
         'delivery_date'=>'required'


        ];
    }

    public function messages()
    {
        return [
            'mainOrderId.required' => 'Please Enter a MainOrderId ',
            'mainOrderId.numeric' => 'String is not allowed',
            'warehouseId.required' => 'Please Enter a WarehouseId',
            'warehouseId.numeric' => 'String is not allowed',
            'quantity.required' => 'Please Enter a Quantity',
            'quantity.numeric' => 'String is not allowed',
            'delivery_date.required' => 'Delivery Deadline is required',
        ];
    }
}
