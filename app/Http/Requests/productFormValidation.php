<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productFormValidation extends FormRequest
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
            'title'=>'required|string',
            'category'=>'required',
            'img'=>'required',
            'unit'=>'required',
            'DH_raw_materials'=>'required',
            'warehouse_raw_materials'=>'required',
            'wages'=>'required',
            'carring_charge'=>'required',
            'treatement_deduction'=>'required',
            'totalcost_for_warehouse'=>'required',
            'DH_total_price'=>'required',
            'FOB_cost'=>'required'
        ];
    }
}
