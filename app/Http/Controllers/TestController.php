<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{
    public function uiTest()
    {
        $drivers = Driver::all();
        
        return Inertia::render('UiTest')
            ->with(compact('drivers'));
    }
}
