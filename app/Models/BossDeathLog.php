<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class BossDeathLog extends Model
{
    protected $guarded = [];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'new_time_to_death' => 'datetime:Y-m-d\TH:i:s.000000\Z',
        'old_time_to_death' => 'datetime:Y-m-d\TH:i:s.000000\Z',
    ];
}
