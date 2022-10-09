<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrackRequest;
use App\Models\Track;
use Inertia\Inertia;
use Inertia\Response;

class TrackController extends Controller
{
    public function index(): Response
    {
        $tracks = Track::all();
        
        return Inertia::render('Admin/Tracks',
            ['tracks' => $tracks]
        );
    }
    
    public function create(): Response
    {
        //
    }
    
    public function store(TrackRequest $request): Response
    {
        //
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
    
    public function destroy(Track $id): Response
    {
        //
    }
}
