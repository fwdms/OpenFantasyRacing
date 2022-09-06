<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResultRequest;
use App\Models\Result;
use Illuminate\Database\Eloquent\Model;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Franchise;
use App\Http\Controllers\Controller;

class ResultsController extends Controller
{
    public function index(): Response
    {
        $franchises = Franchise::all();
        
        return Inertia::render('Admin/Results')
            ->with(compact('franchises'));
    }
    
    public function store(ResultRequest $request): Model
    {
        return (new Result)->create([
            'race_id' => $request->event_id,
            'driver_id' => $request->driver_id,
            'starting_pos' => $request->starting_pos,
            'finish_pos' => $request->finish_pos,
            'points_for_race' => $request->points_earned,
            'DNF' => $request->DNF
        ]);
    }
    
    public function update(Result $result, ResultRequest $request)
    {
        $response = $result->update([
            'race_id' => $request->event_id,
            'driver_id' => $request->driver_id,
            'starting_pos' => $request->starting_pos,
            'finish_pos' => $request->finish_pos,
            'points_for_race' => $request->points_for_race,
            'DNF' => $request->DNF
        ]);
        
        return $response;
    }
}
