<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BossDeathLog extends Model
{
    protected $guarded = [];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
