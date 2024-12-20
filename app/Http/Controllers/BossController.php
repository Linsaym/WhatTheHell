<?php

namespace App\Http\Controllers;

use App\Http\Requests\BossRequest;
use App\Models\Boss;
use App\Models\BossDeathLog;
use App\Models\UserBossesHiddenRelation;
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

        //Логирование
        BossDeathLog::create([
            'boss_id' => $id,
            'old_time_to_death' => $boss->time_to_death,
            'new_time_to_death' => now(),
            'comment' => 'По кнопке "Умер!"',
            'user_id' => $userId,
        ]);

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

        $timeOfDeath = $request->input('time_of_death');

        //Логирование
        BossDeathLog::create([
            'boss_id' => $id,
            'old_time_to_death' => $boss->time_to_death,
            'new_time_to_death' => Carbon::parse($timeOfDeath)->format('Y-m-d H:i:s'),
            'comment' => $request->input('comment') ?? '',
            'user_id' => $userId,
        ]);

        $boss->update([
            'time_to_death' => $timeOfDeath,
            'comment' => $request->input('comment') ?? ''
        ]);

        return response()->json([
            "result" => 'success',
            'bosses' => $this->getAllShowedBosses($userId),
            'hiddenBosses' => $this->getAllHiddenBosses($userId)
        ]);
    }

    public function hideBoss(int $boss_id, Request $request)
    {
        $userId = $request->user()->id;
        UserBossesHiddenRelation::create([
            'user_id' => $userId,
            'boss_id' => $boss_id,
        ]);
        return response()->json([
            "result" => 'success',
            'bosses' => $this->getAllShowedBosses($userId),
            'hiddenBosses' => $this->getAllHiddenBosses($userId)
        ]);
    }

    public function deleteBossFromHideList(int $boss_id, Request $request)
    {
        $userId = $request->user()->id;
        UserBossesHiddenRelation::where([
            'user_id' => $userId,
            'boss_id' => $boss_id
        ])->delete();
        return response()->json([
            "result" => 'success',
            'bosses' => $this->getAllShowedBosses($userId),
            'hiddenBosses' => $this->getAllHiddenBosses($userId)
        ]);
    }

    public function getBossHistory(int $boss_id)
    {
        return response()->json(
            BossDeathLog::where('boss_id', $boss_id)->orderBy('created_at', 'desc')->with('user')->limit(10)->get()
        );
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
