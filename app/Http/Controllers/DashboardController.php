<?php

namespace App\Http\Controllers;

use App\Models\Constructor;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Event;
use Inertia\Response;
use App\Models\Driver;
use App\Models\Result;
use App\Models\Franchise;
use App\Models\FantasyTeam;
use App\Models\League;
use App\Models\Track;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function adminIndex(): Response
    {
        $users = User::all()->count();
        $franchises = Franchise::all()->count();
        $drivers = Driver::all()->count();
        $events = Event::all()->count();
        $results = Result::all()->count();
        $fantasyTeams = FantasyTeam::all()->count();
        $tracks = Track::all()->count();
        $leagues = League::all()->count();
        $constructors = Constructor::all()->count();

        return Inertia::render('Admin/Dashboard')
            ->with(compact('users', 'franchises', 'constructors', 'drivers', 'events', 'results', 'fantasyTeams', 'tracks', 'leagues'));
    }

    public function index(): Response
    {
        $fantasy_teams = FantasyTeam::query()
            ->where('user_id', Auth::id())
            ->join('leagues', 'leagues.id', 'fantasy_teams.league_id')
            ->join('franchises', 'franchises.id', 'leagues.franchise_id')
            ->select(
                'fantasy_teams.*',
                'leagues.name as league_name',
                'franchises.name as franchise_name',
                'franchises.slug as franchise_slug'
            )
            ->get();

        return Inertia::render('Dashboard')
            ->with(compact('fantasy_teams'));
    }
}
