<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Boss extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'time_to_death' => 'datetime',
        ];
    }

    public function hiddenRelations(): HasMany
    {
        return $this->hasMany(UserBossesHiddenRelation::class, 'boss_id');
    }
}
