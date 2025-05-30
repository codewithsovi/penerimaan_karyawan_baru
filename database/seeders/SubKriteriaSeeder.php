<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_kriterias')->insert([
            // C1 (tes)
            ['bobot' => 10,'min' => 0, 'max' => 25, 'kriteria_id' => 1],
            ['bobot' => 30, 'min' => 26, 'max' => 50, 'kriteria_id' => 1],
            ['bobot' => 60, 'min' => 51, 'max' => 75, 'kriteria_id' => 1],
            ['bobot' => 100, 'min' => 76, 'max' => 100, 'kriteria_id' => 1],

            // C2 (pengalaman kerja)
            ['bobot' => 10, 'min' => 0, 'max' => 25, 'kriteria_id' => 2], //pemula
            ['bobot' => 30, 'min' => 26, 'max' => 50, 'kriteria_id' => 2], //cukup
            ['bobot' => 60, 'min' => 51, 'max' => 75, 'kriteria_id' => 2], //mahir
            ['bobot' => 100, 'min' => 76, 'max' => 100, 'kriteria_id' => 2], //sangat berpengalaman

             // C3 (pendidikan terakhir)
            ['bobot' => 10, 'min' => 0, 'max' => 25, 'kriteria_id' => 3], //SMA
            ['bobot' => 30, 'min' => 26, 'max' => 50, 'kriteria_id' => 3], //D3
            ['bobot' => 60, 'min' => 51, 'max' => 75, 'kriteria_id' => 3], //S1
            ['bobot' => 100, 'min' => 76, 'max' => 100, 'kriteria_id' => 3], //s2

            // C4 (wawancara)
            ['bobot' => 20, 'min' => 0, 'max' => 25, 'kriteria_id' => 4],
            ['bobot' => 50, 'min' => 26, 'max' => 50, 'kriteria_id' => 4],
            ['bobot' => 75, 'min' => 51, 'max' => 75, 'kriteria_id' => 4],
            ['bobot' => 100, 'min' => 76, 'max' => 100, 'kriteria_id' => 4],
        ]);
    }
}
