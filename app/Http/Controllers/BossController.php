<?php

namespace App\Http\Controllers;

use App\Http\Requests\BossRequest;
use App\Models\Boss;
use Inertia\Inertia;

class BossController extends Controller
{
    public function index()
    {
        return Inertia::render('Timer/Timer', []);
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
