<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngPlthController extends Controller
{
    public function index()
    {
        return view('pages.ang_plth_in');
    }

    public function store(Request $request)
    {
        
    }
}
