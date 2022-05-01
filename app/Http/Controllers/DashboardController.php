<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
                'franchises.name as franchise_name',
                'franchises.id as franchise_id'
            )
            ->get();

        return Inertia::render('Dashboard')->with(compact('fantasy_teams'));
    }
}
