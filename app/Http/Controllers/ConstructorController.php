<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Constructor;
use App\Models\Franchise;
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
            ->first();

        return Inertia::render('Constructors/Show')
            ->with(compact('constructor'));
    }
}
