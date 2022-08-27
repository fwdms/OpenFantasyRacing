<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use App\Models\Race;
use App\Models\Result;
use Inertia\Inertia;
use Inertia\Response;

class EventController extends Controller
{
    public function index(string $franchise_slug): Response
    {
        $franchise = Franchise::query()
            ->where('slug', $franchise_slug)
            ->firstOrFail();
        
        /** @var Franchise $franchise */
        $events = Race::query()
            ->where('franchise_id', $franchise->id)
            ->with('track')
            ->orderBy('date', 'ASC')
            ->get();
        
        return Inertia::render('Events/Index')
            ->with(compact('franchise', 'events'));
    }
    
    public function show(string $franchise_slug, int $id): Response
    {
        $franchise = Franchise::query()
            ->where('slug', $franchise_slug)
            ->first();
        
        $event = Race::query()
            ->where('id', $id)
            ->with('track')
            ->first();
        
        /** @var Result $event */
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
