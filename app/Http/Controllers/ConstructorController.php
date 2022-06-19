<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Constructor;
use App\Models\Driver;
use App\Models\Franchise;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConstructorController extends Controller
{
    public function show($franchise_slug, $slug): \Inertia\Response
    {
        $franchise = Franchise::where('slug', $franchise_slug)
            ->firstOrFail();

        $constructor = Constructor::with('drivers')
            ->where('franchise_id', $franchise->id)
            ->where('slug', $slug)
            ->with('results')
            ->with('drivers')
            ->first();

        return Inertia::render('Constructors/Show')
            ->with(compact('constructor', 'franchise'));
    }
}
