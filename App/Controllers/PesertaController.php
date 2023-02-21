<?php

namespace App\Controllers;

use App\Core\Controller;

class PesertaController extends Controller
{
    public function index()
    {
        $data = $this->model('Peserta')->all();
        $this->response(200,
        [
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function show($id)
    {
        $data = $this->model('Peserta')->find($id);

        if ($id != null){
            $this->response(200,
            [
                'status' => 'success',
                'data' => $data
            ]);
        }else{
            $this->response(200,
            [
                'status' => 'failed',
                'data' => $data
            ]);
        }
    }

    public function create(){
        $nama = $this->input->post('nama_lengkap');
        $nisn = $this->input->post('nisn');
        $status = $this->input->post('status');
        $prodi = $this->input->post('prodi');

        $data = $this->model('Peserta')->create([
            'nama_lengkap' => $nama,
            'nisn' => $nisn,
            'status' => $status,
            'prodi' => $prodi,
        ]);

        $this->response(201,
        [
            'status' => 'success',
            'data' => $data
        ]);

    }
}
