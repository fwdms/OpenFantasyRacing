<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Event;
use App\Models\Result;
use App\Models\Franchise;
use App\Http\Resources\JsonCollection;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CollectionController extends Controller
{
    public function results(Event $event_id): ResourceCollection
    {
        return new JsonCollection(
            Result::query()
                ->where('race_id', $event_id)
                ->with('driver')
                ->orderBy('finish_pos', 'ASC')
                ->get()
        );
    }
    
    public function drivers(string $franchise_slug): ResourceCollection
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
