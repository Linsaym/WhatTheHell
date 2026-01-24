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

    // bosses
    Route::get('/bosses', fn() => Inertia::render('Guides/bosses/bosses'))->name('bosses');
    Route::get('/bosses/dark-shaman', fn() => Inertia::render('Guides/bosses/dark-shaman'))->name('bosses.dark-shaman');
    Route::get('/bosses/rat-queen', fn() => Inertia::render('Guides/bosses/rat-queen'))->name('bosses.rat-queen');
    Route::get('/bosses/beastmorph', fn() => Inertia::render('Guides/bosses/beastmorph'))->name('bosses.beastmorph');
    Route::get('/bosses/archon', fn() => Inertia::render('Guides/bosses/archon'))->name('bosses.archon');
    Route::get('/bosses/giant-tortolla', fn() => Inertia::render('Guides/bosses/giant-tortolla'))->name('bosses.giant-tortolla');
    Route::get('/bosses/destructor', fn() => Inertia::render('Guides/bosses/destructor'))->name('bosses.destructor');
    Route::get('/bosses/ancient-ent', fn() => Inertia::render('Guides/bosses/ancient-ent'))->name('bosses.ancient-ent');
    Route::get('/bosses/hugo', fn() => Inertia::render('Guides/bosses/hugo'))->name('bosses.hugo');
    Route::get('/bosses/zibo', fn() => Inertia::render('Guides/bosses/zibo'))->name('bosses.zibo');
    Route::get('/bosses/springy', fn() => Inertia::render('Guides/bosses/springy'))->name('bosses.springy');
    Route::get('/bosses/edward', fn() => Inertia::render('Guides/bosses/edward'))->name('bosses.edward');
    Route::get('/bosses/dengur', fn() => Inertia::render('Guides/bosses/dengur'))->name('bosses.dengur');
    Route::get('/bosses/voko', fn() => Inertia::render('Guides/bosses/voko'))->name('bosses.voko');
    Route::get('/bosses/pozhiki', fn() => Inertia::render('Guides/bosses/pozhiki'))->name('bosses.pozhiki');

    // классы
    Route::get('/best-class', fn() => Inertia::render('Guides/classes/BestClass'))->name('best-class');
    Route::get('/crusader', fn() => Inertia::render('Guides/classes/Crusader'))->name('crusader');
    Route::get('/rogue', fn() => Inertia::render('Guides/classes/Rogue'))->name('rogue');
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
