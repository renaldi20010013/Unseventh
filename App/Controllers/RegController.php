<?php

namespace App\Controllers;

use App\Core\Controller;

class RegController extends Controller
{
    public function create()
    {
        $naleng = $this->input->post('username');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $no_telepon = $this->input->post('no_telepon');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $role = $this->input->post('role_id');
        
        $data = $this->model('Reg')->findWhere(['username' => $naleng]);
        if ($data != null ) 
        {
            $this->response(409,'Username '.$naleng.' sudah terdaftar');
            exit;
        }
        else{
            $data = $this->model('Reg')->create([
                'username' => $username,
                'nama_lengkap' => $nama_lengkap,
                'no_telepon' => $no_telepon,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'role_id' => $role
            ]);
            $this->response(201,'registrasi berhasil', $data );
        }
    }

}
