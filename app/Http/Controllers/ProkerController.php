<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProkerController extends Controller
{
    public function pk_aktif()
    {
        // select proker aktif
        $tblproker = DB::table('j_kegiatan')
        ->where('kategori', '=', 1)
        ->get();

        $tahun = date('Y');
        $cek1 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 20)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $prog1 = round(($cek1/12)*100);

        $cek2 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', '=', 21)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $prog2 = round(($cek2/6)*100);

        $cek3 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', '=', 22)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $prog3 = round(($cek3/3)*100);

        $cek4 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', '=', 23)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $prog4 = round(($cek4/4)*100);


        // dd($prog1);
        return view('pages.proker_aktif', [
            'tblproker' => $tblproker, 
            'dd1'       => $prog1, 
            'dd2'       => $prog2, 
            'dd3'       => $prog3,
            'dd4'       => $prog4
        ]);
    }

    public function pk_pasif()
    {
        // select proker pasif
        $tblproker = DB::table('j_kegiatan')
        ->where('kategori', '=', 0)
        ->get();

        $tahun = date('Y');
        
        $cek1 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 1)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $prog1 = round(($cek1/1)*100);

        $cek2 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 2)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $prog2 = round(($cek2/2)*100);

        $cek3 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 3)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $prog3 = round(($cek3/6)*100);

        $cek4 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 4)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $prog4 = round(($cek4/4)*100);

        $cek5 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 6)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $prog5 = round(($cek5/3)*100);

        $cek6 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 7)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $prog6 = round(($cek6/1)*100);

        $cek7 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 8)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $prog7 = round(($cek7/6)*100);

        $a = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 9)
                ->whereBetween(DB::raw('MONTH (K.tgl_akhir)'), [1, 6])
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $b = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 9)
                ->whereBetween(DB::raw('MONTH (K.tgl_akhir)'), [7, 12])
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        if ($a > 0) {
            $c = 1;
        } else {
            $c = 0;
        }
        if ($b > 0) {
            $d = 1;
        } else {
            $d = 0;
        }
        $prog8 = round((($c+$d)/2)*100);

        $a1 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 10)
                ->whereBetween(DB::raw('MONTH (K.tgl_akhir)'), [1, 6])
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $b1 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 10)
                ->whereBetween(DB::raw('MONTH (K.tgl_akhir)'), [7, 12])
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        if ($a1 > 0) {
            $c1 = 1;
        } else {
            $c1 = 0;
        }
        if ($b1 > 0) {
            $d1 = 1;
        } else {
            $d1 = 0;
        }
        $prog9 = round((($c1+$d1)/2)*100);

        $a2 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 11)
                ->whereBetween(DB::raw('MONTH (K.tgl_akhir)'), [1, 6])
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $b2 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 11)
                ->whereBetween(DB::raw('MONTH (K.tgl_akhir)'), [7, 12])
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        if ($a2 > 0) {
            $c2 = 1;
        } else {
            $c2 = 0;
        }
        if ($b2 > 0) {
            $d2 = 1;
        } else {
            $d2 = 0;
        }
        $prog10 = round((($c2+$d2)/2)*100);

        $a3 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 12)
                ->whereBetween(DB::raw('MONTH (K.tgl_akhir)'), [1, 6])
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $b3 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 12)
                ->whereBetween(DB::raw('MONTH (K.tgl_akhir)'), [7, 12])
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        if ($a3 > 0) {
            $c3 = 1;
        } else {
            $c3 = 0;
        }
        if ($b3 > 0) {
            $d3 = 1;
        } else {
            $d3 = 0;
        }
        $prog11 = round((($c3+$d3)/2)*100);

        $cek12 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 13)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $prog12 = round(($cek12/1)*100);

        return view('pages.proker_pasif', [
            'tblproker' => $tblproker,
            'dd1'       => $prog1,
            'dd2'       => $prog2,
            'dd3'       => $prog3,
            'dd4'       => $prog4,
            'dd5'       => $prog5,
            'dd6'       => $prog6,
            'dd7'       => $prog7,
            'dd8'       => $prog8,
            'dd9'       => $prog9,
            'dd10'      => $prog10,
            'dd11'      => $prog11,
            'dd12'      => $prog12
        ]);
    }
}
