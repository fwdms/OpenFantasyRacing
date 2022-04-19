<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\League;
use App\Models\FantasyTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LeagueController extends Controller
{
    // Show a single league
    public function show($id)
    {
        $league = League::where('id', $id)->get();

        return view('leagues.show')->with(compact('league'));
    }

    // View for the Form to create a League
    public function create()
    {
        $franchises = DB::table('franchises')->get();

        return Inertia::render('Leagues/Create')->with(compact('franchises'));
    }

    // Post request for handling a new league
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'bail|required',
            'franchise_id' => 'required',
            'fantasyTeamName' => 'required'
        ]);

        $league = League::create([
            'name' => $request->name,
            'franchise_id' => $request->franchise_id,
            'about_text' => $request->about_text,
            'league_owner_id' => Auth::user()->id
        ]);

        $team = FantasyTeam::create([
            'team_name' => $request->fantasyTeamName,
            'league_id' => $league->id,
            'user_id' => Auth::user()->id,
        ]);

        return Redirect::route('dashboard.index');
    }
}
