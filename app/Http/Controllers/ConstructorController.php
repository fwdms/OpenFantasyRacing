<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConstructorController extends Controller
{
    public function show($franchise_slug, $slug)
    {
        $franchise = DB::table('franchises')->where('slug', $franchise_slug)->first();

        $constructor = DB::table('constructors')->where('franchise_id', $franchise->id)->where('slug', $slug)->first();
        dd($constructor);
    }
}
