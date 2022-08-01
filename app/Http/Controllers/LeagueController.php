<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeagueRequest;
use App\Models\FantasyTeam;
use App\Models\Franchise;
use App\Models\League;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class LeagueController extends Controller
{
    // Show a single league
    public function show(League $league): Response
    {
        $league = $league->query()
            ->with('FantasyTeams')
            ->with('Franchise')
            ->first();

        $fantasyTeams = FantasyTeam::query()
            ->where('league_id', $league->id)
            ->with('Drivers')
            ->get();

        return Inertia::render('Leagues/Show')
            ->with(compact('league', 'fantasyTeams'));
    }

    // View for the Form to create a League
    public function create(): Response
    {
        $franchises = Franchise::all();

        return Inertia::render('Leagues/Create')
            ->with(compact('franchises'));
    }

    // Post request for handling a new league
    public function store(LeagueRequest $request): RedirectResponse
    {
        $league = League::create([
            'name' => $request->name,
            'franchise_id' => $request->franchise_id,
            'about_text' => $request->about_text,
            'league_owner_id' => Auth::user()->id,
        ]);

        $team = FantasyTeam::create([
            'team_name' => $request->fantasyTeamName,
            'league_id' => $league->id,
            'user_id' => Auth::user()->id,
        ]);

        return Redirect::route('dashboard.index');
    }
}
