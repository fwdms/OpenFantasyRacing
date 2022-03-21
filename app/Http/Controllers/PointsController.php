<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class PointsController extends Controller
{
    public function qualifyingIndex()
    {
        return Inertia::render('Profile/Edit');
    }
}
