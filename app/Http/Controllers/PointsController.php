<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PointsController extends Controller
{
    public function qualifyingIndex()
    {
        $qualifyingPoints = DB::table('points')->where('type', 'Qualifying')->get();
    }
}
