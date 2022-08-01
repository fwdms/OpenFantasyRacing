<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\FantasyTeam;
use App\Models\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class FantasyTeamController extends Controller
{
    public function show(League $league, FantasyTeam $team): \Inertia\Response
    {
        $team = FantasyTeam::query()
            ->where('id', $team->id)
            ->with('User')
            ->with('league')
            ->first();

        $fantasyDrivers = DB::table('fantasy_team_drivers')
            ->where('fantasy_team_id', $team->id)
            ->get();

        $drivers = Driver::query()
            ->whereIn('id', $fantasyDrivers->pluck('driver_id'))
            ->with('constructor')
            ->with('results')
            ->withSum('results', 'points_for_race')
            ->orderBy('results_sum_points_for_race', 'DESC')
            ->get();

        return Inertia::render('FantasyTeams/Show')
            ->with(compact('team', 'drivers'));
    }
}
