<?php

namespace App\Http\Controllers;

use App\Models\Constructor;
use App\Models\Driver;
use App\Models\Franchise;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FranchiseController extends Controller
{
    public function show($id)
    {
        $franchise = Franchise::where('id', $id)
            ->first();

        $contructors = Constructor::where('franchise_id', $id)
            ->get();

        $drivers = Driver::with('constructor')
            ->whereIn('constructor_id', $contructors->pluck('id'))
            ->orderBy('last_name')
            ->get();

        return Inertia::render('Franchises/Show')
            ->with(compact('franchise', 'contructors', 'drivers'));
    }
}
