<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeliveryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'base' => 'required',
            'protein' => 'required',
            'second_choose' => 'required',
            'sauce' => 'required',
            'drinks' => 'required',
            'payment' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute input is required.',

        ];
    }
}
