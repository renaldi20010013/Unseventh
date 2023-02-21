<?php

namespace App\Database\Seeders;

use App\Core\Seeder;
use App\Core\QueryBuilder as DB;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        $data=[
            'no_peserta' => '1',
            'nama_lengkap' => 'peserta',
            'tempat_lahir' => 'bandung',
            'tanggal_lahir' => '13-13-2313',
            'agama'=> 'agama',
            'jenis_kelamin' => 'jenis kelamin',
            'alamat' => 'alamat',
            'nisn' => '0098765400',
            'prodi' => 'program studi',
            'cita_cita' => 'cita cita',
            'motivasi' => 'motivasi',
            'role_id' => '2'
        ];
        DB::table('profile')->insert($data);
    }
} 