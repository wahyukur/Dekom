<?php

use Illuminate\Database\Seeder;
use App\Jenis;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {$arr_jeniss=[
            [
                'nama_jenis' => 'Perjalanan Dinas (Luar Negeri)',
            ],
            [
                'nama_jenis' => 'Perjalanan Dinas (Luar Kota)',
            ],
            [
                'nama_jenis' => 'Kursus',
            ],
            [
                'nama_jenis' => 'Seminar', 
            ],
            [
                'nama_jenis' => 'Pelatihan', 
            ],
            [
                'nama_jenis' => 'Lokakarya', 
            ],
            [
                'nama_jenis' => 'Rapat Dewan Komisaris', 
            ],
            [
                'nama_jenis' => 'Rapat Dekom & Direksi', 
            ],
            [
                'nama_jenis' => 'Rapat Komite',
            ],
        ]; 
            foreach ($arr_jeniss as $arr_jenis) {
                $jenis = new Jenis;
                $jenis->nama_jenis = $arr_jenis['nama_jenis'];
                $jenis->save();
            }
        }
    }
}
