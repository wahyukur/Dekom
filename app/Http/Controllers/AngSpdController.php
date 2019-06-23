<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AngSpdController extends Controller
{
    public function index(Request $request)
    {
        $uri = $request->path();
        $tbluser = DB::table('users')->get();
        $tblperiod = DB::table('period')->get();
        $tblJkeg = DB::table('j_kegiatan')->get();
        $tblkeg = DB::table('kegiatan')->get();
        $tblAngSpd = DB::table('ang_spd as AS')
                        ->select('AS.*', 'P.*', 'K.*', 'JK.*')
                        ->join('period as P', 'AS.period_id', '=', 'P.id')
                        ->join('kegiatan as K', 'AS.kegiatan_id', '=', 'K.id')
                        ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                        ->get();
                    if ($request->is('anggaran_spd_dalam')){
                        return view('pages.ang_spd_dalam', ['tblAngSpd' => $tblAngSpd,
                                                   'tblJKeg' => $tblJkeg]); 
                    }
                    elseif ($request->is('anggaran_spd_luar')) {
                        return view('pages.ang_spd_luar', ['tblAngSpd' => $tblAngSpd,
                                                   'tblJKeg' => $tblJkeg]);
                    }
    }

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
