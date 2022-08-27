<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

class FAQController extends Controller
{
    public function index(): Response
    {
        $faqs = DB::table('faq')
            ->get();
        
        return Inertia::render('Faq')->with(compact('faqs'));
    }
}
