<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kriterias')->insert([
            [
            'nama' => 'tes',
            'kode_kriteria'=>'c1',
            'bobot'=>0.4 ,
            'tipe'=>'benefit' ,
            ],
            [
            'nama' => 'pengalaman kerja',
            'kode_kriteria'=>'c2',
            'bobot'=>0.3 ,
            'tipe'=>'benefit' ,
            ],
            [
            'nama' => 'pendidikan terakhir',
            'kode_kriteria'=>'c3',
            'bobot'=>0.2 ,
            'tipe'=>'benefit' ,
            ],
            [
            'nama' => 'wawancara',
            'kode_kriteria'=>'c4',
            'bobot'=>0.1 ,
            'tipe'=>'benefit' ,
            ],
        ]);
    }
}
