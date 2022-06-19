<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Inertia\Inertia;
use App\Models\Driver;
use App\Models\Result;
use App\Models\Franchise;
use App\Models\Constructor;
use Illuminate\Http\Request;

class FranchiseController extends Controller
{
    public function show($franchise_slug)
    {
        $franchise = Franchise::where('slug', $franchise_slug)
            ->firstOrFail();

        $constructors = Constructor::where('franchise_id', $franchise['id'])
            ->with('drivers')
            ->with('results')
            ->withSum('results', 'points_for_race')
            ->orderBy('results_sum_points_for_race', 'DESC')
            ->get();

        $drivers = Driver::with('constructor')
            ->whereIn('constructor_id', $constructors->pluck('id'))
            ->with('results')
            ->withSum('results', 'points_for_race')
            ->orderBy('results_sum_points_for_race', 'DESC')
            ->get();

        $events = Race::where('franchise_id', $franchise->id)
            ->with('track')
            ->orderBy('date', 'ASC')
            ->get();

        return Inertia::render('Franchises/Show')
            ->with(compact('franchise', 'constructors', 'drivers', 'events'));
    }
}
