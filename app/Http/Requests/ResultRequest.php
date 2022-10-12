<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $event_id
 * @property int $driver_id
 * @property int $starting_pos
 * @property int $finish_pos
 * @property int $points_for_race
 * @property bool $DNF
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
