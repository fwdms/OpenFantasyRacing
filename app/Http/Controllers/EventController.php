<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use App\Models\Race;
use App\Models\Result;
use Inertia\Inertia;

class EventController extends Controller
{
    public function index(String $franchise_slug): \Inertia\Response
    {
        $franchise = Franchise::where('slug', $franchise_slug)
            ->firstOrFail();

        $events = Race::where('franchise_id', $franchise->id)
            ->with('track')
            ->orderBy('date', 'ASC')
            ->get();

        return Inertia::render('Events/Index')
            ->with(compact('franchise', 'events'));
    }

    public function show(String $franchise_slug, Int $id): \Inertia\Response
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

        return Inertia::render('Events/Show')
            ->with(compact('franchise', 'event', 'results'));
    }
}
