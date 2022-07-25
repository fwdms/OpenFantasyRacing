<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Driver;
use App\Models\Result;
use App\Models\Franchise;
use App\Models\Constructor;

class DriverController extends Controller
{
    public function index(String $franchise_slug): \Inertia\Response
    {
        $franchise = Franchise::query()
            ->where('slug', $franchise_slug)
            ->first();

        $constructors = Constructor::query()
            ->where('franchise_id', $franchise['id'])
            ->with('drivers')
            ->with('results')
            ->withSum('results', 'points_for_race')
            ->orderBy('results_sum_points_for_race', 'DESC')
            ->get();

        $drivers = Driver::query()
            ->whereIn('constructor_id', $constructors->pluck('id'))
            ->with('constructor')
            ->with('results')
            ->withSum('results', 'points_for_race')
            ->orderBy('results_sum_points_for_race', 'DESC')
            ->get();

        return Inertia::render('Drivers/Index')
            ->with(compact('drivers', 'franchise', 'constructors'));
    }

    public function show(String $franchise_slug, String $id): \Inertia\Response
    {
        $franchise = Franchise::query()
            ->where('slug', $franchise_slug)
            ->first();

        $driver = Driver::query()
            ->where('id', $id)
            ->with('results')
            ->with('constructor')
            ->withSum('results', 'points_for_race')
            ->first();

        $results = Result::query()
            ->where('driver_id', $driver->id)
            ->join('races', 'races.id', 'race_id')
            ->join('tracks', 'races.track_id', 'tracks.id')
            ->orderBy('races.date')
            ->select(
                'results.*',
                'races.*',
                'tracks.name as track_name',
                'tracks.location as track_location'
            )
            ->get();

        return Inertia::render('Drivers/Show')
            ->with(compact('driver', 'franchise', 'results'));
    }
}
