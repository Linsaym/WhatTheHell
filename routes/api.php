<?php

use App\Http\Controllers\BossController;

// Api роуты

Route::put('api/boss-die/{id}', [BossController::class, 'updateTimeOfDeath'])->name('api.boss-die');
Route::put('api/setTimeDeath/{id}', [BossController::class, 'setCurrentlyTimeOfDeath'])->name('api.update-time-death');
Route::put('api/setCurrentlyTimeOfDeath/{id}', [BossController::class, 'setCurrentlyTimeOfDeath'])->name('api.set-currently-time-death');

Route::post('api/hideBoss/{id}', [BossController::class, 'hideBoss'])->name('api.hide-boss');
Route::delete('api/hideBoss/{id}', [BossController::class, 'deleteBossFromHideList'])->name('api.delete-boss-from-hide-list');

Route::delete('api/');
