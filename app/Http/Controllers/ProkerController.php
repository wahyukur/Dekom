<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class ProkerController extends Controller
{
    public function pk_aktif()
    {
        // select proker aktif
        $tblproker = DB::table('j_kegiatan')
        ->where('kategori', '=', 1)
        ->get();
        
        $aktif = $this->hitung_aktif();
        $prog_a1 = $aktif['prog1'];
        $prog_a2 = $aktif['prog2'];
        $prog_a3 = $aktif['prog3'];
        $prog_a4 = $aktif['prog4'];
        
        // dd($prog1);
        return view('pages.proker_aktif', [
            'tblproker' => $tblproker, 
            'dd1'       => $prog_a1, 
            'dd2'       => $prog_a2, 
            'dd3'       => $prog_a3,
            'dd4'       => $prog_a4
        ]);
    }

    public function pk_pasif()
    {
        // select proker pasif
        $tblproker = DB::table('j_kegiatan')
        ->where('kategori', '=', 0)
        ->get();

        $pasif = $this->hitung_pasif();
        $prog_p1 = $pasif['prog1'];
        $prog_p2 = $pasif['prog2'];
        $prog_p3 = $pasif['prog3'];
        $prog_p4 = $pasif['prog4'];
        $prog_p5 = $pasif['prog5'];
        $prog_p6 = $pasif['prog6'];
        $prog_p7 = $pasif['prog7'];
        $prog_p8 = $pasif['prog8'];
        $prog_p9 = $pasif['prog9'];
        $prog_p10 = $pasif['prog10'];
        $prog_p11 = $pasif['prog11'];
        $prog_p12 = $pasif['prog12'];
        
        return view('pages.proker_pasif', [
            'tblproker' => $tblproker,
            'dd1'       => $prog_p1,
            'dd2'       => $prog_p2,
            'dd3'       => $prog_p3,
            'dd4'       => $prog_p4,
            'dd5'       => $prog_p5,
            'dd6'       => $prog_p6,
            'dd7'       => $prog_p7,
            'dd8'       => $prog_p8,
            'dd9'       => $prog_p9,
            'dd10'      => $prog_p10,
            'dd11'      => $prog_p11,
            'dd12'      => $prog_p12
        ]);
    }

    public function hitung_aktif()
    {
        # code...
        $tahun = date('Y');
        $cek1 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 20)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $data['prog1'] = round(($cek1/12)*100);

        $cek2 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', '=', 21)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $data['prog2'] = round(($cek2/6)*100);

        $cek3 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', '=', 22)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $data['prog3'] = round(($cek3/3)*100);

        $cek4 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', '=', 23)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $data['prog4'] = round(($cek4/4)*100);

        return $data;
    }

    public function hitung_pasif()
    {
        # code...
        $tahun = date('Y');
        
        $cek1 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 1)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $data['prog1'] = round(($cek1/1)*100);

        $cek2 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 2)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $data['prog2'] = round(($cek2/2)*100);

        $data['cek3'] = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 3)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $data['prog3'] = round(($cek3/6)*100);

        $cek4 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 4)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $data['prog4'] = round(($cek4/4)*100);

        $cek5 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 6)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $data['prog5'] = round(($cek5/3)*100);

        $data['cek6'] = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 7)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $data['prog6'] = round(($cek6/1)*100);

        $data['cek7'] = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 8)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $data['prog7'] = round(($cek7/6)*100);

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
        $data['cek8'] = $c + $d;
        $data['prog8'] = round((($c+$d)/2)*100);

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
        $data['prog9'] = round((($c1+$d1)/2)*100);

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
        $data['prog10'] = round((($c2+$d2)/2)*100);

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
        $data['prog11'] = round((($c3+$d3)/2)*100);

        $cek12 = DB::table('kegiatan as K')
                ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                ->where('JK.id', 13)
                ->whereYear('K.tgl_akhir', $tahun)
                ->count();
        $data['prog12'] = round(($cek12/1)*100);

        return $data;
    }

    public function report1() {
        
        $aktif = $this->hitung_aktif();
        $prog_a1 = $aktif['prog1'];
        $prog_a2 = $aktif['prog2'];
        $prog_a3 = $aktif['prog3'];
        $prog_a4 = $aktif['prog4'];

        $data['hasil_1'] = ($prog_a1+$prog_a2)/100;
        $data['hasil_2'] = $prog_a3/100;
        $data['hasil_3'] = $prog_a4/100;

        $pasif = $this->hitung_pasif();
        $prog_p3 = $pasif['prog3'];
        $prog_p6 = $pasif['prog6'];
        $prog_p7 = $pasif['prog7'];
        $prog_p8 = $pasif['prog8'];
        $prog_p9 = $pasif['prog9'];
        $prog_p10 = $pasif['prog10'];
        $prog_p11 = $pasif['prog11'];

        $data['proker_pasif_a'] = ;
        $data['proker_pasif_b'] = ;
        $data['proker_pasif_c'] = ;
        $data['proker_pasif_d'] = ;

        $data['hasil_a'] = $prog_p3/100;
        $data['hasil_b'] = ($prog_p6+$prog_p7)/100;
        $data['hasil_c'] = $prog_p11/100;
        $data['hasil_d'] = ($prog_p8+$prog_p9+$prog_p10)/100;



        $pdf = PDF::loadView('report.report1', compact('data'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('Report.pdf', array("Attachment" => false));
    }
}
