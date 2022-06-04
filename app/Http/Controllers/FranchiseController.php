<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Event;
use App\Models\Driver;
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
            ->get();

        $drivers = Driver::with('constructor')
            ->whereIn('constructor_id', $constructors->pluck('id'))
            ->orderBy('last_name')
            ->get();

        $events = Event::where('franchise_id', $franchise->id)
            ->get();

        return Inertia::render('Franchises/Show')
            ->with(compact('franchise', 'constructors', 'drivers', 'events'));
    }
}
