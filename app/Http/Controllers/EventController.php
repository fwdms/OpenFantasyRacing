<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Inertia\Inertia;

class EventController extends Controller
{
    // Display a listing of the resource.
    public function index(): \Inertia\Response
    {
        return Inertia::render('Calendar');
    }
}
