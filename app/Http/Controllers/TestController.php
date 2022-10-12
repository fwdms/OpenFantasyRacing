<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Inertia\Inertia;

class TestController extends Controller
{
    public function uiTest()
    {
        $drivers = Driver::orderBy('last_name', 'ASC')->get();

        return Inertia::render('UiTest')
            ->with(compact('drivers'));
    }
}
