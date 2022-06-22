<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use App\Models\Race;
use App\Models\Result;
use Inertia\Inertia;

class EventController extends Controller
{
    // Display a listing of the resource.
    public function index(): \Inertia\Response
    {
        return Inertia::render('Calendar');
    }

    public function show($franchise_slug, $id): \Inertia\Response
    {
        $franchise = Franchise::where('slug', $franchise_slug)
            ->first();

        $event = Race::where('id', $id)
            ->with('track')
            ->first();

        $results = Result::where('race_id', $event->id)
            ->with('driver')
            ->orderBy('finish_pos', 'ASC')
            ->orderBy('starting_pos', 'ASC')
            ->get();

        return Inertia::render('Events/Show')->with(compact('franchise', 'event', 'results'));
    }
}
