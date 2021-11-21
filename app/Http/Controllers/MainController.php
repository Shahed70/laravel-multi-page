<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function home () {
        return view('home');
    }

    function about () {
        return view('about');
    }

    function service () {
        return view('service');
    }
    function portfolio () {
        return view('portfolio');
    }
}
