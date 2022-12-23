<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use App\Models\Race;
use App\Models\Result;
use App\Models\Track;
use Inertia\Inertia;
use Inertia\Response;

class EventController extends Controller
{
    public function adminIndex()
    {
        $franchises = Franchise::get();

        return Inertia::render(
            'Admin/Events/Index',
            ['franchises' => $franchises]
        );
    }

    public function index(Franchise $franchise): Response
    {
        $events = Race::query()
            ->where('franchise_id', $franchise->id)
            ->with('track')
            ->orderBy('date', 'ASC')
            ->get();

        return Inertia::render('Events/Index')
            ->with(compact('franchise', 'events'));
    }
    
    public function create(Franchise $franchise): Response
    {
        $franchises = Franchise::get();
        $tracks = Track::get();
        
        return Inertia::render('Admin/Events/Create')
            ->with(compact('franchises', 'tracks'));
    }

    public function show(Franchise $franchise, Race $race): Response
    {
        $event = $race->load('track');

        $results = Result::query()
            ->where('race_id', $event->id)
            ->with('driver')
            ->orderBy('finish_pos', 'ASC')
            ->orderBy('starting_pos', 'ASC')
            ->get();

        return Inertia::render('Events/Show')
            ->with(compact('franchise', 'event', 'results'));
    }
}
