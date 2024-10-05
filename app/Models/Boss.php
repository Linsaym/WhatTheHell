<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'time_to_death' => 'datetime',
        ];
    }
}
