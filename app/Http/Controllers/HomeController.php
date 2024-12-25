<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Eventually, we’ll pass data to the view. For now, just return the homepage view.
        return view('home');
    }
}

