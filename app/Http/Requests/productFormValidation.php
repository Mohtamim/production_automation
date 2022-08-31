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
            'title'=>'required|string|regex:/^[\pL\s\-]+$/u',
            'category'=>'required|string|regex:/^[\pL\s\-]+$/u',
            'img'=>'required',
            'unit'=>'required|string|regex:/^[\pL\s\-]+$/u',
            'DH_raw_materials'=>'required|numeric',
            'supplier_raw_materials'=>'required|numeric',
            'wages'=>'required|numeric',
            'carring_charge'=>'numeric',
            'treatement_deduction'=>'numeric',
            'is_sample_product'=>'required|boolean',
            'totalcost_for_supplier'=>'required|numeric',
            'DH_total_price'=>'required|numeric'
        ];
    }
}
