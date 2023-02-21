<?php

namespace App\Database\Seeders;

use App\Core\Seeder;
use App\Core\QueryBuilder as DB;

class PesertaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_lengkap' => 'peserta',
            'nisn' => '123456789',
            'status' => 'aktif',
            'prodi' => 'prodi',
        ];
        DB::table('peserta')->insert($data);
    }
}