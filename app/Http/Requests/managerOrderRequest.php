<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class managerOrderRequest extends FormRequest
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
            'status'=>'required|numeric',

        ];
    }
    public function messages()
    {
        return [
            'status.required' => 'The Status field is required',
            // 'status.numeric' => 'The Status field is required',
        ];
    }
}
