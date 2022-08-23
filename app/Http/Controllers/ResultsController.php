<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function store(Request $request): Result
    {
        $response = Result::create([
            'race_id' => $request->event_id,
            'driver_id' => $request->driver_id,
            'starting_pos' => $request->startingPos,
            'finish_pos' => $request->finishPos,
            'points_for_race' => $request->pointsEarned,
            'DNF' => $request->dnf
        ]);

        return $response;
    }
}
