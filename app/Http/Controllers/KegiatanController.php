<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Kegiatan;
use App\Jenis;

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
}
