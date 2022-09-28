<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DhDetailsForm extends FormRequest
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
            'dh_name',
                    'registered_office'=>'required',
                    'present_address'=>'required',
                    'telephone'=>'required',
                    'fax'=>'required',
                    'email'=>'required',
                    'website'=>'required',
                    'logo'=>'required'
        ];
    }
}
