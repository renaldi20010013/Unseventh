<?php

namespace App\Controllers;

use App\Core\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $data = $this->model('Profile')->all();
        $this->response(200, $data);
    }

    public function show($id)
    {
        $data = $this->model('Profile')->find($id);
        if ($data == null){
            $this->response(404,'Data tidak ditemukan');
            exit;
        }
        else{
            $this->response(200, $data);
        }
    }

    public function create()
    {
        $no_peserta = $this->input->post('no_peserta');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tempat_lahir');
        $agama = $this->input->post('agama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $nisn = $this->input->post('nisn');
        $prodi = $this->input->post('prodi');
        
        $data = $this->model('Profile')->findWhere(['no_peserta' => $no_peserta]);
        if ($data != null ) 
        {
            $this->response(409,'Nomor Peserta sudah terdaftar');
            exit;
        }
        else{
            $store = $this->model('Profile')->create([
                'no_peserta' => $no_peserta,
                'nama_lengkap' => $nama_lengkap,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'agama' => $agama,
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat,
                'nisn' => $nisn,
                'prodi' => $prodi
            ]);

            $this->response(201,
            [
                'message' => 'Data berhasil disimpan',
                'data' => $store
            ]);
        }
    }

    public function update(int $id)
    {
        $data = $this->model('Profile')->find($id);
        if(!$data){
            $this->response(404,'Data tidak ditemukan');
            exit;
        }else{
            $data = $this->input->put();
            $update =$this->model('Profile')->update($id, $data);
            $this->response(201,
            [
                'message' => 'Data berhasil diupdate',
                'data' => $update, $data
            ]);
        }

    }

}