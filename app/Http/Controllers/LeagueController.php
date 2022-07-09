<?php

namespace App\Http\Controllers;

use App\Models\FantasyTeam;
use App\Models\League;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class LeagueController extends Controller
{
    // Show a single league
    public function show(League $id): Response
    {
        $league = League::where('id', $id)
            ->with('FantasyTeams')
            ->first();

        return Inertia::render('Leagues/Show')->with(compact('league'));
    }

    // View for the Form to create a League
    public function create(): Response
    {
        $franchises = DB::table('franchises')->get();

        return Inertia::render('Leagues/Create')->with(compact('franchises'));
    }

    // Post request for handling a new league
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'bail|required',
            'franchise_id' => 'required',
            'fantasyTeamName' => 'required',
        ]);

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
