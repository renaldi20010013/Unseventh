<?php

namespace App\Database\Seeders;

use App\Core\Seeder;
use App\Core\QueryBuilder as DB;

class RegSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_lengkap' => 'Administrator',
            'username' => 'admin',
            'no_telepon' => '0891234567890',
            'email' => 'admin@gmail.com',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'role_id' => 1,
        ];
        DB::table('registrasi')->insert($data);

    }
}