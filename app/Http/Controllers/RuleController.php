<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RuleController extends Controller
{
    // Display a listing of the resource.
    public function index()
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

        return Inertia::render('Rules')
            ->with(
                compact(
                    'qualifyingPoints',
                    'qualifyingBonusPoints',
                    'racePoints',
                    'raceBonusPoints',
                    'streaks'
                )
            );
    }
}
