<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Franchise;
use App\Models\Result;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DriverController extends Controller
{
    public function index(): \Inertia\Response
    {
        //
    }

    public function create(): \Inertia\Response
    {
        //
    }

    public function store(Request $request): \Inertia\Response
    {
        //
    }

    public function show(String $franchise_slug, String $id): \Inertia\Response
    {
        $franchise = Franchise::where('slug', $franchise_slug)
            ->first();

        $driver = Driver::where('id', $id)
            ->with('results')
            ->with('constructor')
            ->withSum('results', 'points_for_race')
            ->first();

        $results = Result::where('driver_id', $driver->id)
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

        return Inertia::render('Drivers/Show')->with(compact('driver', 'franchise', 'results'));
    }

    public function edit(Int $id): \Inertia\Response
    {
        //
    }

    public function update(Request $request, Int $id): \Inertia\Response
    {
        //
    }

    public function destroy($id): \Inertia\Response
    {
        //
    }
}
