<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use Inertia\Inertia;
use Inertia\Response;

class FranchiseController extends Controller
{
    public function adminIndex(): Response
    {
        $franchises = Franchise::all();
        
        return Inertia::render('Admin/Franchises')
            ->with(compact('franchises'));
    }
}
