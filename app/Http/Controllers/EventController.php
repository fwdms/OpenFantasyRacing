<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Franchise;
use App\Models\Race;
use App\Models\Result;
use Inertia\Inertia;
use Inertia\Response;

class EventController extends Controller
{
    public function index(Franchise $franchise): Response
    {
        $events = Race::query()
            ->where('franchise_id', $franchise->id)
            ->with('track')
            ->orderBy('date', 'ASC')
            ->get();

        return Inertia::render('Events/Index', [
            'franchise' => $franchise,
            'events' => $events,
        ]);
    }

    public function show(Franchise $franchise, Event $event): Response
    {
        $event->load('track');

        $results = Result::query()
            ->where('race_id', $event->id)
            ->with('driver')
            ->orderBy('finish_pos', 'ASC')
            ->orderBy('starting_pos', 'ASC')
            ->get();

        return Inertia::render('Events/Show', [
            'franchise' => $franchise,
            'event' => $event,
            'results' => $results,
        ]);
    }
}
