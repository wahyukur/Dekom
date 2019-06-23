<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AngPlthController extends Controller
{
    public function index()
    {
        $tbluser = DB::table('users')->get();
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

    public function showInput()
    {
        $tblkeg = DB::table('kegiatan as K')
                        ->select('K.*', 'JK.jenis_kegiatan')
                        ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                        ->get();
        return view('pages.ang_plth_in', ['tblkeg' => $tblkeg]);
    }

    public function pilih(Request $request)
    {
        $id = $request->id;
        $tbl = DB::table('kegiatan')->where('id', $id)->get();
        foreach ($tbl as $t) {
            $tempat = $t->tempat;
            $array[] = array('tempat' => $tempat); 
        }
        $data = json_encode($array);
        return view('pages.ang_plth_in', ['data' => $data]);
    }

    public function store(Request $request)
    {
        
    } 
}
