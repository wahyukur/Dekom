<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Kegiatan;
use App\Jenis;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\kegiatanExport;

class KegiatanController extends Controller
{
    public function store(Request $request)
    {
        $jenis = $request->input('jenisKeg');
        $nama = $request->input('namaKeg');
        $tempat = $request->input('tmpKeg');
        $penyelengara = $request->input('penyeKeg');
        $arr_hadir = $request->input('hadirKeg');
        $hadir = implode(", ", $arr_hadir);
        $tglMulai = $request->input('tglMulai');
        $tglAkhir = $request->input('tglAkhir');
        $convMulai = strtotime($tglMulai);
        $convAkhir = strtotime($tglAkhir);
        $newMulai = date('Y-m-d', $convMulai);
        $newAkhir = date('Y-m-d', $convAkhir);
        $keterangan = $request->input('ketKeg');

            $insKeg = new Kegiatan;
            $insKeg->jenis_id = $jenis;
            $insKeg->nama_keg = $nama;
            $insKeg->tempat = $tempat;
            $insKeg->penyelengara = $penyelengara;
            $insKeg->dihadiri = $hadir;
            $insKeg->tgl_mulai = $newMulai;
            $insKeg->tgl_akhir = $newAkhir;
            $insKeg->keterangan = $keterangan;
            $insKeg->check = 'no';
            $insKeg->save();
        
        return redirect()->route('kegiatan');
    }

    public function period(Request $request)
    {
        $tahun = $request->input('tahun');
        $index = 1;
        $range_tahun = DB::table('kegiatan')->select(DB::raw('YEAR(tgl_akhir) year'))
                                      ->groupby('year')
                                      ->get();
        $semester = $request->input('semester');
            if ($semester == 1) {
                $period = DB::table('kegiatan as K')
                        ->select('K.*', 'JK.jenis_kegiatan')
                        ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                        ->whereBetween(DB::raw('MONTH (K.tgl_akhir)'), [1, 6])
                        ->whereYear('K.tgl_akhir', $tahun)
                        ->get();           
                    }
            elseif ($semester == 2) {
                $period = DB::table('kegiatan as K')
                        ->select('K.*', 'JK.jenis_kegiatan')
                        ->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                        ->whereBetween(DB::raw('MONTH (K.tgl_akhir)'), [7, 12])
                        ->whereYear('K.tgl_akhir', $tahun)
                        ->get();                
            }
            return view('pages.kegiatan', ['tblkeg' => $period,
                                           'tahun' => $range_tahun,
                                            'index' => $index]);
    }

    public function exportKegiatan(){
        return Excel::download(new kegiatanExport, 'Kegiatan.xlsx');
    }
}
