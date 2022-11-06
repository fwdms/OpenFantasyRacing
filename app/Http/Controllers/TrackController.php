<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrackRequest;
use App\Models\Track;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class TrackController extends Controller
{
    public function index(): Response
    {
        $tracks = Track::all();

        return Inertia::render(
            'Admin/Tracks/Index',
            ['tracks' => $tracks]
        );
    }

    public function create(): Response
    {
        return Inertia::render(
            'Admin/Tracks/Create'
        );
    }

    public function store(TrackRequest $request): RedirectResponse
    {
        Track::create(
            $request->validated()
        );

        return redirect()->route('admin.tracks.index');
    }

    public function show(Track $id): Response
    {
        //
    }

    public function edit(Track $id): Response
    {
        //
    }

    public function update(TrackRequest $request, Track $id): Response
    {
        //
    }

    public function destroy(Track $track): RedirectResponse
    {
        $track->delete();

        return response()->redirectToRoute(route('admin.tracks.index'), [], 303);
    }
}
