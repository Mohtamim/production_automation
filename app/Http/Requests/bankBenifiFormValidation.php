<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bankBenifiFormValidation extends FormRequest
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
            'name'=>'required',
            'addressline1'=>'required',
            'addressline2'=>'required',
            'account_no'=>'required',
            'swift_code'=>'required',
        ];
    }
}
