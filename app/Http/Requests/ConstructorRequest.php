<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConstructorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation()
    {
        $this->merge([
            'franchise_id' => request()->franchise['id'],
        ]);
    }

    public function rules(): array
    {
        return [
            'franchise_id' => 'required',
            'name' => 'required',
            'short_name' => 'nullable',
            'slug' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'franchise_id.required' => 'A franchise is required',
            'name.required' => 'Constructor name is required.',
            'slug.required' => 'Constructor slug is required.'
        ];
    }
}
