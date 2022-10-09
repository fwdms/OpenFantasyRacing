<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\FantasyTeam;
use App\Models\League;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

class FantasyTeamController extends Controller
{
    public function show(League $league, FantasyTeam $team): Response
    {
        $league->load('franchise');
        
        $team->load('User')->load('league');
        
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
            ->with(compact('league', 'team', 'drivers'));
    }
}
