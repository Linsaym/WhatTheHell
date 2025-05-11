<?php

use App\Http\Controllers\BossController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckPermissions;
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

    //Активности (реализация отменена т.к. все активности проводятся внутри дискорда)
    Route::get('/activity', function () {
        return "Активности";
    })->name('activity');
});

//Гайды
Route::get('guides', fn() => Inertia::render('Guides/Guides'))->name('guides');

Route::name('guides.')->prefix('/guides')->group(function () {
    // buffs
    Route::get('/buffs', fn() => Inertia::render('Guides/bosses/Buffs'))->name('buffs');

    // классы
    Route::get('/best-class', fn() => Inertia::render('Guides/classes/BestClass'))->name('best-class');
    Route::get('/crusader', fn() => Inertia::render('Guides/classes/Crusader'))->name('crusader');
    Route::get('/hunter', fn() => Inertia::render('Guides/classes/Hunter'))->name('hunter');
    Route::get('/sniper', fn() => Inertia::render('Guides/classes/Sniper'))->name('sniper');
    Route::get('/dark-knight', fn() => Inertia::render('Guides/classes/DarkKnight'))->name('dark-knight');
    Route::get('/wizard', fn() => Inertia::render('Guides/classes/Wizard'))->name('wizard');

    // гайды по игре
    Route::get('/quests', fn() => Inertia::render('Guides/game/quests'))->name('quests');

});

//Гайды на классы
Route::get('guides/builds', fn() => Inertia::render('Guides/Guides'))->name('guides.builds');
Route::get('guides/farm', fn() => Inertia::render('Guides/Guides'))->name('guides.farm');
Route::get('guides/bosses', fn() => Inertia::render('Guides/Guides'))->name('guides.bosses');


require __DIR__ . '/auth.php';
require __DIR__ . '/api.php';
