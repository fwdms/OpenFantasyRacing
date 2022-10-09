<?php

namespace App\Http\Controllers;

use App\Models\Constructor;
use App\Models\Driver;
use App\Models\Franchise;
use App\Models\Result;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class DriverController extends Controller
{
    public function adminIndex(): Response
    {
        $franchises = Franchise::all();

        return Inertia::render('Admin/Drivers/Index')
            ->with(compact('franchises'));
    }

    public function index(Franchise $franchise): Response
    {
        $constructors = Constructor::query()
            ->where('franchise_id', $franchise->id)
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

    public function create(): Response
    {
        return Inertia::render('Admin/Drivers/Create');
    }

    public function store(Request $request): \Illuminate\Http\Response
    {
        $driver = (new Driver())->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'number' => $request->number,
            'constructor_id' => $request->constructor['id'],
            'is_rookie' => $request->is_rookie
        ]);

        return response($driver, 200);
    }

    public function show(Franchise $franchise, Driver $driver): Response
    {
        $driver = $driver->load('constructor');

        $points = Driver::query()
            ->where('id', $driver->id)
            ->withSum('results', 'points_for_race')
            ->first()->results_sum_points_for_race;

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
            ->with(compact('driver', 'points', 'franchise', 'results'));
    }

    public function update(Driver $driver, Request $request)
    {
        $driver->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'number' => $request->number,
            'constructor_id' => $request->constructor['id'],
            'is_rookie' => $request->is_rookie
        ]);
    }

    public function destroy(Driver $driver)
    {
        $driver->delete();
    }
}
