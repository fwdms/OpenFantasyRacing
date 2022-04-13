<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = DB::table('faq')->get();

        return Inertia::render('Faq')->with(compact('faqs'));
    }
}
