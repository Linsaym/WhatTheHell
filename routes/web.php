<?php

use App\Http\Controllers\BossController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard/Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Профиль
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Таймер боссов
    Route::get('/timer', [BossController::class, 'index'])->name('timer');

    //Активности
    Route::get('/activity', function () {
        return Inertia::render('Activity/Activity');
    })->name('activity');

    //Гайды
    Route::get('guides', fn() => Inertia::render('Guides/Guides'))->name('guides');
    Route::get('guides/buffs', fn() => Inertia::render('Guides/Guides'))->name('guides.buffs');
    Route::get('guides/builds', fn() => Inertia::render('Guides/Guides'))->name('guides.builds');
    Route::get('guides/farm', fn() => Inertia::render('Guides/Guides'))->name('guides.farm');
});

Route::put('api/boss-die/{id}', [BossController::class, 'updateTimeOfDeath'])->name('api.boss-die');
Route::put('api/setTimeDeath/{id}', [BossController::class, 'updateTimeOfDeath'])->name('api.update-time-death');

require __DIR__ . '/auth.php';
