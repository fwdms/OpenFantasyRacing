<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Franchise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResultsController extends Controller
{
    public function index(): Response
    {
        $franchises = Franchise::all();

        return Inertia::render('Admin/Results/Index')
            ->with(compact('franchises'));
    }
}
