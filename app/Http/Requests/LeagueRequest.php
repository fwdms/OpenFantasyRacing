<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $id
 * @property int $franchise_id
 * @property string $name
 * @property string $about_text
 * @property string $fantasyTeamName
 */
class LeagueRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'name' => 'bail|required',
            'franchise_id' => 'required',
            'fantasyTeamName' => 'required',
        ];
    }
}
