<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResultRequest;
use App\Models\Race;
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
        $pointsEarned = (new Result)->calculatePoints($request);
        
        return (new Result)->create([
            'race_id' => $request->event_id,
            'driver_id' => $request->driver_id,
            'starting_pos' => $request->starting_pos,
            'finish_pos' => $request->finish_pos,
            'fastest_lap' => $request->fastest_lap,
            'points_for_race' => $pointsEarned,
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
            'fastest_lap' => $request->fastest_lap,
            'points_for_race' => $result->calculatePoints($request),
            'DNF' => $request->DNF
        ]);
        
        return $response;
    }
    
    public function destroy(Result $result)
    {
        return $result->delete();
    }
}
