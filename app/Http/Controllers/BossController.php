<?php

namespace App\Http\Controllers;

use App\Http\Requests\BossRequest;
use App\Models\Boss;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BossController extends Controller
{
    public function getAllShowedBosses(int $userId)
    {
        return Boss::whereDoesntHave('hiddenRelations', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();
    }

    public function getAllHiddenBosses(int $userId)
    {
        return Boss::whereHas('hiddenRelations', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();
    }

    public function index()
    {
        $userId = auth()->user()->id;

        return Inertia::render('Timer/Timer', [
            'bosses' => $this->getAllShowedBosses($userId),
            'hiddenBosses' => $this->getAllHiddenBosses($userId)
        ]);
    }

    public function updateTimeOfDeath(int $id, Request $request)
    {
        $userId = $request->user()->id;
        $boss = Boss::findOrFail($id);

        $boss->update([
            'time_to_death' => now(),
            'comment' => 'По кнопке "Умер!"'
        ]);

        return response()->json([
            "result" => 'success',
            'bosses' => $this->getAllShowedBosses($userId),
            'hiddenBosses' => $this->getAllHiddenBosses($userId)
        ]);
    }

    public function setCurrentlyTimeOfDeath(int $id, Request $request)
    {
        $userId = $request->user()->id;
        $boss = Boss::findOrFail($id);

        // Получаем точное время из запроса
        $timeOfDeath = $request->input('time_of_death');

        $boss->update([
            'time_to_death' => $timeOfDeath, // Используем полученное время
            'comment' => $request->input('comment') ?? ''
        ]);

        return response()->json([
            "result" => 'success',
            'bosses' => $this->getAllShowedBosses($userId),
            'hiddenBosses' => $this->getAllHiddenBosses($userId)
        ]);
    }

    public function store(BossRequest $request)
    {
        return Boss::create($request->validated());
    }

    public function show(Boss $boss)
    {
        return $boss;
    }

    public function update(BossRequest $request, Boss $boss)
    {
        $boss->update($request->validated());

        return $boss;
    }

    public function destroy(Boss $boss)
    {
        $boss->delete();

        return response()->json();
    }
}
