<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sites;

class LandingController extends Controller
{

    public function index()
    {
        $sites = Sites::first();
        return view('front.landing', compact('sites'));
    }
 
}
