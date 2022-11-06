<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriverRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation()
    {
        $this->merge([
            'constructor_id' => request()->constructor['id'],
        ]);
    }

    public function rules(): array
    {
        return [
            'constructor_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'number' => 'integer',
        ];
    }

    public function message(): array
    {
        return [
            'constructor_id.required' => 'A constructor / team is required',
            'first_name.required' => 'A drivers first name is required.',
            'last_name.required' => 'A drivers last name is required',
            'number.integer' => "Driver's number must be a number.",
        ];
    }
}
