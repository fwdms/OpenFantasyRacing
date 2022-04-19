<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Response;

class FAQController extends Controller
{
    public function index(): Response
    {
        $faqs = DB::table('faq')->get();

        return Inertia::render('Faq')->with(compact('faqs'));
    }
}
