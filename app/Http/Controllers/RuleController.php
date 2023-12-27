<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

class RuleController extends Controller
{
    public function index(): Response
    {
        $qualifyingPoints = DB::table('points')
            ->where('type', 'qualifying')
            ->orderBy('id')
            ->get();

        $qualifyingBonusPoints = DB::table('points')
            ->where('type', 'qualifying-bonus')
            ->orderBy('id')
            ->get();

        $racePoints = DB::table('points')
            ->where('type', 'race')
            ->orderBy('id')
            ->get();

        $raceBonusPoints = DB::table('points')
            ->where('type', 'race-bonus')
            ->orderBy('id')
            ->get();

        $streaks = DB::table('points')
            ->where('type', 'streaks')
            ->orderBy('id')
            ->get();

        $sprint = DB::table('points')
            ->where('type', 'sprint')
            ->orderBy('id')
            ->get();

        $sprintBonus = DB::table('points')
            ->where('type', 'sprint-bonus')
            ->orderBy('id')
            ->get();

        return Inertia::render('Rules', [
            'qualifyingPoints' => $qualifyingPoints,
            'qualifyingBonusPoints' => $qualifyingBonusPoints,
            'racePoints' => $racePoints,
            'raceBonusPoints' => $raceBonusPoints,
            'streaks' => $streaks,
            'sprint' => $sprint,
            'sprintBonus' => $sprintBonus,
        ]);
    }
}
