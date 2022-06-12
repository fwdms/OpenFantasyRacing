<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Driver;
use App\Models\Result;
use App\Models\Franchise;
use Illuminate\Http\Request;

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
            ->first();

        $results = Result::where('driver_id', $driver->id)
            ->with('race')
            ->get();

        return Inertia::render('Drivers/Show')->with(compact('driver', 'franchise', 'results'));
    }

    public function edit($id): \Inertia\Response
    {
        //
    }

    public function update(Request $request, $id): \Inertia\Response
    {
        //
    }

    public function destroy($id): \Inertia\Response
    {
        //
    }
}
