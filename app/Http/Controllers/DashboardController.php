<?php

namespace App\Http\Controllers;

use App\Models\FantasyTeam;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Dashboard', [
            'fantasy_teams' => FantasyTeam::query()
                ->where('user_id', auth()->id())
                ->join('leagues', 'leagues.id', 'fantasy_teams.league_id')
                ->join('franchises', 'franchises.id', 'leagues.franchise_id')
                ->select(
                    'fantasy_teams.*',
                    'leagues.name as league_name',
                    'franchises.name as franchise_name',
                    'franchises.slug as franchise_slug'
                )
                ->get()
        ]);
    }
}
