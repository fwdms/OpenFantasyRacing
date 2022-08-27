<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Http\Requests\ResultRequest;
use Illuminate\Database\Eloquent\Model;

class ResultsController extends Controller
{
    public function store(ResultRequest $request): Model
    {
        return (new Result)->create([
            'race_id' => $request->event_id,
            'driver_id' => $request->driver_id,
            'starting_pos' => $request->startingPos,
            'finish_pos' => $request->finishPos,
            'points_for_race' => $request->pointsEarned,
            'DNF' => $request->dnf
        ]);
    }
}
