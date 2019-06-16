<?php

use Illuminate\Database\Seeder;
use App\Period;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {$arr_periods=[
            [
                'semester' => '1',
                'tahun' => '2019',
            ],
            [
                'semester' => '2',
                'tahun' => '2019',
            ],
            [
                'semester' => '1',
                'tahun' => '2020',
            ],
            [
                'semester' => '2',
                'tahun' => '2020',
            ],
            [
                'semester' => '1',
                'tahun' => '2021',
            ],
            [
                'semester' => '2',
                'tahun' => '2021',
            ],
        ]; 
            foreach ($arr_periods as $arr_period) {
                $period = new Period;
                $period->semester = $arr_period['semester'];
                $period->tahun = $arr_period['tahun'];
                $period->timestamps = false;
                $period->save();
            }
        }
    }
}
