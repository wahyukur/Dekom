<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngSpdController extends Controller
{
    public function showInputDalam()
    {
        return view('pages.ang_spd_d_in');
    }

    public function showInputLuar()
    {
        return view('pages.ang_spd_l_in');
    }
    public function inputDalam(Request $request)
    {
        # code...
    }
}
