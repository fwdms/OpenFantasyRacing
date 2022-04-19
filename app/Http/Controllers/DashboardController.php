<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Inertia\Response;

class DashboardController extends Controller
{
    public function index(): Response
    {
        $fantasy_teams = DB::table('fantasy_teams')
            ->where('user_id', Auth::user()->id)
            ->join('leagues', 'leagues.id', 'fantasy_teams.league_id')
            ->join('franchises', 'franchises.id', 'leagues.franchise_id')

            ->select(
                'fantasy_teams.*',
                'leagues.name as league_name',
                'franchises.name as franchise_name'
            )
            ->get();

        return Inertia::render('Dashboard')->with(compact('fantasy_teams'));
    }
}
