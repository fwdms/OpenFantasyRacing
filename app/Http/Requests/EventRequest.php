<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    public function prepareForValidation()
    {
        $this->merge([
            'franchise_id' => $this->franchise['id'],
            'track_id' => $this->track['id']
        ]);
    }
    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'franchise_id' => 'required',
            'track_id' => 'required',
            'date' => 'required',
            'name' => 'required',
            'round_number' => 'nullable'
        ];
    }
}
