<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeagueRequest;
use App\Models\FantasyTeam;
use App\Models\Franchise;
use App\Models\League;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class LeagueController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('Leagues/Create', [
            'franchises' => Franchise::all()
        ]);
    }

    public function store(LeagueRequest $request): RedirectResponse
    {
        $league = League::create([
            'name' => $request->name,
            'franchise_id' => $request->franchise_id,
            'about_text' => $request->about_text,
            'league_owner_id' => auth()->id(),
        ]);

        FantasyTeam::create([
            'team_name' => $request->fantasyTeamName,
            'league_id' => $league->id,
            'user_id' => auth()->id(),
        ]);

        return Redirect::route('dashboard.index');
    }

    public function show(League $league): Response
    {
        $league->load('FantasyTeams')->load('Franchise');

        $fantasyTeams = FantasyTeam::query()
            ->where('league_id', $league->id)
            ->with(['drivers', 'user'])
            ->get();

        return Inertia::render('Leagues/Show')
            ->with(compact('league', 'fantasyTeams'));
    }
}
