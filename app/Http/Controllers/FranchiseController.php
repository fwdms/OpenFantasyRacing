<?php

namespace App\Http\Controllers;

use App\Http\Requests\FranchiseRequest;
use App\Models\Franchise;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class FranchiseController extends Controller
{
    public function adminIndex(): Response
    {
        $franchises = Franchise::all();

        return Inertia::render('Admin/Franchises/Index')
            ->with(compact('franchises'));
    }

    public function create()
    {
        return Inertia::render('Admin/Franchises/Create');
    }

    public function store(FranchiseRequest $request)
    {
        Franchise::create(
            $request->validated()
        );

        return Redirect::back();
    }

    public function edit(Franchise $franchise)
    {
        return Inertia::render('Admin/Franchises/Edit')
            ->with(compact('franchise'));
    }

    public function update(Franchise $franchise, FranchiseRequest $request)
    {
        $franchise->update(
            $request->validated()
        );

        return redirect()->route('admin.franchise.index');
    }

    public function destroy(Franchise $franchise)
    {
        $franchise->delete();

        return redirect()->route('admin.franchise.index');
    }
}
