<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriverRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'number' => 'integer'
        ];
    }

    public function message()
    {
        return [
            'first_name.required' => 'A drivers first name is required.',
            'last_name.required' => 'A drivers last name is required',
            'number.integer' => "Driver's number must be a number."
        ];
    }
}
