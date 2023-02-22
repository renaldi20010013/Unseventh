<?php

namespace App\Database\Seeders;

use App\Core\Seeder;
use App\Core\QueryBuilder as DB;

class Data2Seeder extends Seeder
{
    public function run()
    {
        $data = [
            'nisn' => '1234567890',
            'foto' => 'foto.jpg',
            'kk' => 'kk.pdf',
        ];
        DB::table('data2')->insert($data);

    }
}