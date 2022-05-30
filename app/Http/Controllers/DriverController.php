<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(): \Inertia\Response
    {
        //
    }

    public function create(): \Inertia\Response
    {
        //
    }

    public function store(Request $request): \Inertia\Response
    {
        //
    }

    public function show(String $slug, String $id): \Inertia\Response
    {
        $driver = Driver::where('id', $id)
            ->with('results')
            ->first();

        return Inertia::render('Drivers/Show')->with(compact('driver'));
    }

    public function edit($id): \Inertia\Response
    {
        //
    }

    public function update(Request $request, $id): \Inertia\Response
    {
        //
    }

    public function destroy($id): \Inertia\Response
    {
        //
    }
}
