<?php

use App\Http\Controllers\BossController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckPermissions;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Dashboard/Dashboard');
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard/Dashboard');
})->name('dashboard');

//Вспомогательные
Route::get('/403', function () {
    return Inertia::render('403');
})->name('403');

Route::middleware('auth')->group(function () {
    //Профиль
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Таймер боссов
    Route::get('/timer', [BossController::class, 'index'])->middleware(CheckPermissions::class . ':medium')->name('timer');

    //Активности
    Route::get('/activity', function () {
        return Inertia::render('Activity/Activity');
    })->name('activity');

    //Гайды
    Route::get('guides', fn() => Inertia::render('Guides/Guides'))->name('guides');
    Route::get('guides/buffs', fn() => Inertia::render('Guides/Guides'))->name('guides.buffs');
    Route::get('guides/builds', fn() => Inertia::render('Guides/Guides'))->name('guides.builds');
    Route::get('guides/farm', fn() => Inertia::render('Guides/Guides'))->name('guides.farm');
    Route::get('guides/bosses', fn() => Inertia::render('Guides/Guides'))->name('guides.bosses');
});


require __DIR__ . '/auth.php';
require __DIR__ . '/api.php';
