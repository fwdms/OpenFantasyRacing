<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\Franchise;
use App\Models\Race;
use App\Models\Result;
use App\Models\Track;
use Illuminate\Http\RedirectResponse;
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

        return Inertia::render('Events/Index')
            ->with(compact('franchise', 'events'));
    }

    public function create(Franchise $franchise): Response
    {
        $franchises = Franchise::all();
        $tracks = Track::all();

        return Inertia::render('Admin/Events/Create')
            ->with(compact('franchises', 'tracks'));
    }

    public function store(Franchise $franchise, EventRequest $request): RedirectResponse
    {
        Event::create(
            $request->validated()
        );

        return redirect(route('admin.events.index'));
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

        return Inertia::render('Events/Show')
            ->with(compact(
                'franchise',
                'event',
                'results'
            ));
    }

    public function edit(Event $event): Response
    {
        $franchises = Franchise::get();
        $tracks = Track::get();

        return Inertia::render('Admin/Events/Edit')
            ->with(compact(
                'franchises',
                'tracks',
                'event'
            ));
    }

    public function update(Event $event, EventRequest $request)
    {
        $event->update($request->validated());

        return redirect(route('admin.events.index'));
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect(route('admin.events.index'));
    }

    public function adminIndex()
    {
        $franchises = Franchise::all();

        return Inertia::render(
            'Admin/Events/Index',
            ['franchises' => $franchises]
        );
    }
}
