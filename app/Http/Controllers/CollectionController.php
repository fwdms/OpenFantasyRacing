<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Result;
use App\Models\Franchise;
use App\Models\Constructor;
use Illuminate\Http\Request;
use App\Http\Resources\JsonCollection;

class CollectionController extends Controller
{
    public function results($event_id)
    {
        return new JsonCollection(
            Result::query()
                ->where('race_id', $event_id)
                ->with('driver')
                ->orderBy('finish_pos', 'ASC')
                ->get()
        );
    }

    public function drivers($franchise_slug)
    {
        $franchise = Franchise::query()
            ->where('slug', $franchise_slug)
            ->with('constructors')
            ->first();

        return new JsonCollection(
            Driver::query()
            ->whereIn('constructor_id', $franchise->constructors->pluck('id'))
            ->orderBy('last_name', 'ASC')
            ->get()
        );
    }
}
