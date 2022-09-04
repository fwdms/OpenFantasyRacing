<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class FranchiseController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Admin/Franchises');
    }
}
