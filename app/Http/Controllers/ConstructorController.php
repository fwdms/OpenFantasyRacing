<?php

namespace App\Http\Controllers;

use App\Models\Constructor;
use App\Models\Driver;
use App\Models\Franchise;
use App\Models\Result;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

class ConstructorController extends Controller
{
    public function index(Franchise $franchise): Response
    {
        $teams = Constructor::query()
            ->where('franchise_id', $franchise->id)
            ->with('drivers')
            ->with('results')
            ->withSum('results', 'points_for_race')
            ->orderBy('results_sum_points_for_race', 'DESC')
            ->get();
        
        return Inertia::render('Constructors/Index')
            ->with(compact('franchise', 'teams'));
    }
    
    public function show(Franchise $franchise, string $slug): Response
    {
        $team = Constructor::query()
            ->where('franchise_id', $franchise->id)
            ->where('slug', $slug)
            ->with('results')
            ->first();
        
        /** @var Constructor $team */
        $drivers = Driver::query()
            ->where('constructor_id', $team->id)
            ->with('results')
            ->withSum('results', 'points_for_race')
            ->orderBy('results_sum_points_for_race', 'DESC')
            ->get();
        
        $drivers_Ids = $drivers->pluck('id');
        
        $results = Result::query()
            ->whereIn('driver_id', $drivers_Ids)
            ->with('Race')
            ->with('Driver')
            ->orderBy(
                DB::table('races')
                    ->select('round_number')
                    ->whereColumn('results.race_id', 'races.id')
                    ->take(1),
                'ASC'
            )
            ->orderBy('id', 'ASC')
            ->get();
        
        return Inertia::render('Constructors/Show')
            ->with(compact(
                'team',
                'drivers',
                'franchise',
                'results'
            ));
    }
}
