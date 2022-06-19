<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Inertia\Inertia;
use App\Models\Driver;
use App\Models\Result;
use App\Models\Franchise;
use App\Models\Constructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConstructorController extends Controller
{
    public function show($franchise_slug, $slug): \Inertia\Response
    {
        $franchise = Franchise::where('slug', $franchise_slug)
            ->firstOrFail();

        $team = Constructor::where('franchise_id', $franchise->id)
            ->where('slug', $slug)
            ->with('results')
            ->first();

        $drivers = Driver::where('constructor_id', $team->id)
            ->with('results')
            ->withSum('results', 'points_for_race')
            ->orderBy('results_sum_points_for_race', 'DESC')
            ->get();

        $drivers_Ids = $drivers->pluck('id');

        $results = Result::whereIn('driver_id', $drivers_Ids)
            ->with('Race')
            ->with('Driver')
            ->orderBy(
                Race::select('round_number')
                    ->whereColumn('results.race_id', 'races.id')
                    ->take(1)
            )
            ->orderBy('id', 'ASC')
            ->get();

        return Inertia::render('Constructors/Show')
            ->with(compact('team', 'drivers', 'franchise', 'results'));
    }
}
