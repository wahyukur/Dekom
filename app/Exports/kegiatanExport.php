<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class kegiatanExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View {
        return view('page.kegiatanExcel', [
            'kegiatanData' => DB::table('kegiatan as K')
            			->join('j_kegiatan as JK', 'K.jenis_id', '=', 'JK.id')
                		->get()
        ]);
    }
}
