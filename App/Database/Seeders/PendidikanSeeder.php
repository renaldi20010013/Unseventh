<?php

namespace App\Database\Seeders;

use App\Core\Seeder;
use App\Core\QueryBuilder as DB;

class PendidikanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'jenis_pendidikan_sd' => 'Negeri',
            'nama_sekolah_sd' => 'SDN 1 Bandung',
            'kota_sd' => 'Bandung',
            'tahun_lulus_sd' => '2010',
            'nilai_sd' => '90',

            'jenis_pendidikan_smp' => 'Swasta',
            'nama_sekolah_smp' => 'SMPN 1 Bandung',
            'akreditasi_smp' => 'A',
            'tahun_lulus_smp' => '2013',
            'kota_smp' => 'Bandung',
            'nilai_smp' => '90',

            'jenis_pendidikan_smk' => 'Swasta',
            'nama_sekolah_smk' => 'SMKN 1 Bandung',
            'akreditasi_smk' => 'A',
            'tahun_lulus_smk' => '2016',
            'kota_smk' => 'Bandung',
            'nilai_smk' => '90',

        ];
        DB::table('pendidikan')->insert($data);

    }
}