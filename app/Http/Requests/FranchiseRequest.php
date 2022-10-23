<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FranchiseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'slug' => 'required'
        ];
    }
    
    public function messages()
    {
        return [ 
            'name.required' => 'Franchise name is required.',
            'slug.required' => 'Franchise slug is required.'
        ];
    }
}
