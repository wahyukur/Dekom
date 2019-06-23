<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Ang_plth;
use App\Coa;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    
    public function showLogin()
    {
        return view('pages.login');
    }

    // PAGE ANGGARAN PELATIHAN
    public function ang_plth(Request $request)
    {
        $tbluser = DB::table('users')->get();
        $tblperiod = DB::table('period')->get();
        $tblJkeg = DB::table('j_kegiatan')->get();
        $tblkeg = DB::table('kegiatan')->get();
        $tblAngPlth = DB::table('ang_plth as AP')
                        ->select('AP.*', 'P.*', 'K.*', 'JK.*')
                        ->join('period as P', 'AP.period_id', '=', 'P.id')
                        ->join('kegiatan as K', 'AP.kegiatan_id', '=', 'K.id')
                        ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                        ->get();
                    return view('pages.ang_plth', ['tblAngPlth' => $tblAngPlth,
                                                   'tblJKeg' => $tblJkeg]);
    }

    // PAGE ANGGARAN PELATIHAN
    public function ang_spd(Request $request)
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

    // PAGE KEGIATAN
    public function kegiatan()
    {
        $tbluser = DB::table('users')->get();
        $index = 1;
        $tahun = DB::table('kegiatan')->select(DB::raw('YEAR(tgl_akhir) year'))
                                      ->groupby('year')
                                      ->get();
        $tblkeg = DB::table('kegiatan as K')
                        ->select('K.*', 'JK.jenis_kegiatan')
                        ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                        ->get();
                    return view('pages.kegiatan', ['tblkeg' => $tblkeg,
                                                    'index' => $index,
                                                    'tahun' => $tahun]);
    }

    // PAGE PROKER
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

    public function kalender(){
        return view('pages.kalender');
    }
}
