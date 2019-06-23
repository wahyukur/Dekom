<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProkerController extends Controller
{
    public function pk_aktif()
    {
        return view('pages.proker_aktif');
    }

    public function pk_pasif()
    {
        $tblproker = DB::table('j_proker')->get();
        $index = 1;
        return view('pages.proker_pasif', ['tblproker' => $tblproker, 
                                            'index' => $index]);
    }

    public function proses(Request $request)
    {
        # code...
    }
}
