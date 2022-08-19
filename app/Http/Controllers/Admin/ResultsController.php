<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Models\Franchise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Race;

class ResultsController extends Controller
{
    public function index()
    {
        $franchises = Franchise::all();

        return Inertia::render('Admin/Results/Index')
            ->with(compact('franchises'));
    }
}
