<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('homes/home', ['home'=>'active']);
    }    
    
    public function about()
    {
        return view('homes/about', ['about'=>'active']);
    }
}
