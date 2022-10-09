<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $country
 * @property string $street_address
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property string $about
 * @property string $website
 * @property string $cover_photo
 * @property string $profile_image
 */
class ProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
