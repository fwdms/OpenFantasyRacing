<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $fantasy_teams = DB::table('fantasy_teams')->where('user_id', Auth::user()->id)->get();

        // Get relationship between Fantasy Teams, League ID,
        $leagues = DB::table('leagues')->where('league_owner_id', Auth::user()->id)->get();

        return Inertia::render('Dashboard')->with(compact('fantasy_teams', 'leagues'));
    }
}
