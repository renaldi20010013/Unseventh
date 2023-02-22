<?php

namespace App\Database\Seeders;

use App\Core\Seeder;
use App\Core\QueryBuilder as DB;

class Data2Seeder extends Seeder
{
    public function run()
    {
        $data=[
            'nisn' => '1',
            'foto' => 'foto.jpg',
            'kartu_keluarga' => 'kartu_keluarga',
            'ijazah' => 'ijazah',
            'skhun'=> 'skhun',
            'raport' => 'raport',
            'keterangan_sehat' => 'keterangan_sehat',
            'lampiran' => 'lampiran'
        ];
        DB::table('data2')->insert($data);

    }
}