<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Packages\Auth;

class AuthController extends Controller
{
    public function login()
    {
        Auth::attempt(
            [
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            ]
        );

        $this->response(401, [
            'message' => 'Invalid credentials'
        ]);
    }

    public function register()
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
            $reg = $this->input->post($data);
            $this->response(201,
            [
                'message'=>'registrasi berhasil',
                'data' => $data
            ]);
        }
    }
    
    public function reset()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = $this->model('Reg')->findWhere(['username' => $username]);
        if ($data == null ) 
        {
            $this->response(409,'Username '.$username.' tidak terdaftar');
            exit;
        }
        else{
            $data = $this->model('Reg')->update([
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ],['username' => $username]);
            $reg = $this->input->post($data);
            $this->response(201,
            [
                'message'=>'reset password berhasil',
                'data' => $data
            ]);
        }
    }
}
