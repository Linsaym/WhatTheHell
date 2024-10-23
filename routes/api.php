<?php

use App\Http\Controllers\BossController;

// Api роуты

Route::put('api/boss-die/{id}', [BossController::class, 'updateTimeOfDeath'])->name('api.boss-die');
Route::put('api/setTimeDeath/{id}', [BossController::class, 'setCurrentlyTimeOfDeath'])->name('api.update-time-death');
Route::put('api/setCurrentlyTimeOfDeath/{id}', [BossController::class, 'setCurrentlyTimeOfDeath'])->name('api.set-currently-time-death');

Route::delete('api/');
