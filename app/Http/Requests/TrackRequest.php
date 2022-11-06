<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrackRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'location' => 'required',
            'number_of_turns' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'A track name is required.',
            'location.required' => 'A track location is required.',
            'number_of_turns.required' => 'The number of turns is required.',
            'number_of_turns.numeric' => 'The number of turns must be a number.',
        ];
    }
}
