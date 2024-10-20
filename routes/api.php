<?php

use App\Http\Controllers\BossController;

// Api роуты

Route::put('api/boss-die/{id}', [BossController::class, 'updateTimeOfDeath'])->name('api.boss-die');
Route::put('api/setTimeDeath/{id}', [BossController::class, 'updateTimeOfDeath'])->name('api.update-time-death');
