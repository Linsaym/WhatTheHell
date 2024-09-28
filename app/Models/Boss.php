<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    protected function casts()
    {
        return [
            'time_to_death' => 'datetime',
        ];
    }
}
