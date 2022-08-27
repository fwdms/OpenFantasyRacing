<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $event_id
 * @property int $driver_id
 * @property int $startingPos
 * @property int $finishPos
 * @property int $pointsEarned
 * @property bool $dnf
 */
class ResultRequest extends FormRequest
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
