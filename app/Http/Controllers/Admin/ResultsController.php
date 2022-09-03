<?php

namespace App\Http\Controllers\Admin;

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
        
        return Inertia::render('Admin/Results/Index')
            ->with(compact('franchises'));
    }
    
    public function store(ResultRequest $request): Model
    {
        dd($request);
        return (new Result)->create([
            'race_id' => $request->event_id,
            'driver_id' => $request->driver_id,
            'starting_pos' => $request->startingPos,
            'finish_pos' => $request->finishPos,
            'points_for_race' => $request->pointsEarned,
            'DNF' => $request->dnf
        ]);
    }
    
    public function update(Result $result, ResultRequest $request)
    {
        dd($result);
    }
}
