<?php

namespace App\Http\Controllers;

use App\Http\Requests\DriverRequest;
use App\Models\Constructor;
use App\Models\Driver;
use App\Models\Franchise;
use App\Models\Result;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class DriverController extends Controller
{
    public function index(Franchise $franchise): Response
    {
        $constructors = Constructor::query()
            ->where('franchise_id', $franchise->id)
            ->with(['drivers', 'results'])
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
        $franchises = Franchise::all();

        return Inertia::render('Admin/Drivers/Create')
            ->with(compact('franchises'));
    }

    public function store(DriverRequest $request): RedirectResponse
    {
        Driver::create(
            $request->validated()
        );

        return Redirect(route('admin.driver.index'));
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

    public function edit(Driver $driver)
    {
        $franchises = Franchise::all();

        $driver->load('constructor', 'constructor.franchise');

        return Inertia::render('Admin/Drivers/Edit')
            ->with(compact('franchises', 'driver'));
    }

    public function update(Driver $driver, DriverRequest $request)
    {
        $driver->update($request->validated());

        return Redirect(route('admin.driver.index'));
    }

    public function destroy(Driver $driver)
    {
        $driver->delete();

        return Redirect(route('admin.driver.index'));
    }

    public function adminIndex(): Response
    {
        $franchises = Franchise::all();

        return Inertia::render('Admin/Drivers/Index')
            ->with(compact('franchises'));
    }
}
