<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BossRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required'],
            'respawn' => ['required', 'date'],
            'time_to_death' => ['required', 'date'],
            'location_id' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
