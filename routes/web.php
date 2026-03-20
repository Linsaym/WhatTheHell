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
    Route::get("/for-developers", fn() => Inertia::render('Guides/ForDevelopers'))->name('for-developers');

    // buffs
    Route::get('/buffs', fn() => Inertia::render('Guides/bosses/Buffs'))->name('buffs');

    // bosses
    Route::get('/bosses', fn() => Inertia::render('Guides/bosses/bosses'))->name('bosses');
    Route::get('/bosses-spawn', fn() => Inertia::render('Guides/bosses/bosses-spawn'))->name('bosses-spawn');

    // классы
    Route::get('/best-class', fn() => Inertia::render('Guides/newbies/BestClass'))->name('best-class');
    Route::get('/crusader', fn() => Inertia::render('Guides/classes/Crusader'))->name('crusader');
    Route::get('/rogue', fn() => Inertia::render('Guides/classes/Rogue'))->name('rogue');
    Route::get('/hunter', fn() => Inertia::render('Guides/classes/Hunter'))->name('hunter');
    Route::get('/sniper', fn() => Inertia::render('Guides/classes/Sniper'))->name('sniper');
    Route::get('/dark-knight', fn() => Inertia::render('Guides/classes/DarkKnight'))->name('dark-knight');
    Route::get('/wizard', fn() => Inertia::render('Guides/classes/Wizard'))->name('wizard');

    // новички
    Route::get('/leveling', fn() => Inertia::render('Guides/newbies/Leveling'))->name('leveling');
    Route::get('/words', fn() => Inertia::render('Guides/newbies/Words'))->name('words');
    Route::get('/65-lvl', fn() => Inertia::render('Guides/newbies/Endgame'))->name('endgame');
    Route::get('/farming', fn() => Inertia::render('Guides/newbies/Farming'))->name('farming');
    Route::get('/enchanting', fn() => Inertia::render('Guides/newbies/Enchanting'))->name('enchanting');
    Route::get('/dungeons', fn() => Inertia::render('Guides/newbies/Dungeons'))->name('dungeons');

    // гайды по игре
    Route::get('/quests', fn() => Inertia::render('Guides/game/quests'))->name('quests');

});

//Гайды на классы
Route::get('guides/builds', fn() => Inertia::render('Guides/Guides'))->name('guides.builds');
Route::get('guides/farm', fn() => Inertia::render('Guides/Guides'))->name('guides.farm');

//Soft
Route::get('royal-quest/soft', fn() => Inertia::render('Soft/Soft'))->name('soft');

Route::name('soft.')->prefix('/royal-quest/soft')->group(function () {
    Route::get('/gear-calculator', fn() => Inertia::render('Soft/GearCalculator'))->name('gear-calculator');
    Route::get('/market-analyzer', fn() => Inertia::render('Soft/MarketAnalyzer'))->name('market-analyzer');
    Route::get('/boss-timer', fn() => Inertia::render('Soft/BossTimer'))->name('boss-timer');
    Route::get('/royal-wiki-overlay', fn() => Inertia::render('Soft/RoyalWikiOverlay'))->name('royal-wiki-overlay');
});

//Donate
Route::get('/donate', function () {
    return Inertia::render('Donate/Donate');
})->name('donate');

require __DIR__ . '/auth.php';
require __DIR__ . '/api.php';
