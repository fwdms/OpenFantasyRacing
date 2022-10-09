<?php

namespace App\Http\Controllers;

use App\Http\Resources\JsonCollection;
use App\Models\Constructor;
use App\Models\Driver;
use App\Models\Franchise;
use App\Models\Race;
use App\Models\Result;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CollectionController extends Controller
{
    public function results(Race $race): ResourceCollection
    {
        return new JsonCollection(
            Result::query()
                ->where('race_id', $race->id)
                ->with('driver')
                ->orderBy('finish_pos', 'ASC')
                ->orderBy('starting_pos', 'ASC')
                ->get()
        );
    }

    public function drivers(Franchise $franchise): ResourceCollection
    {
        $franchise = $franchise
            ->with('constructors')
            ->firstOrFail();

        return new JsonCollection(
            Driver::query()
                ->whereIn('constructor_id', $franchise->constructors->pluck('id'))
                ->orderBy('last_name', 'ASC')
                ->with('constructor')
                ->get()
        );
    }

    public function constructors(Franchise $franchise): ResourceCollection
    {
        return new JsonCollection(
            Constructor::query()
                ->where('franchise_id', $franchise->id)
                ->orderBy('name', 'ASC')
                ->get()
        );
    }

    public function events(Franchise $franchise): ResourceCollection
    {
        return new JsonCollection(
            Race::where('franchise_id', $franchise->id)
                ->get()
        );
    }
}
