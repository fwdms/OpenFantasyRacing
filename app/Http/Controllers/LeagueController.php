<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
            'name' => 'bail|required|unique:leagues',
            'franchise_id' => 'required',
        ]);

        League::create([
            'name' => $request->name,
            'franchise_id' => $request->franchise_id,
            'league_owner_id' => Auth::user()->id
        ]);

        return view('dashboard');
    }
}
