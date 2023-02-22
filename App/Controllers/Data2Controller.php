<?php

namespace App\Controllers;

use App\Core\Controller;

class Data2Controller extends Controller
{
    public function index()
    {
        $data = $this->model('Data2')->all();
        $this->response(200, $data);
    }

    public function show($id)
    {
        $data = $this->model('Data2')->find($id);
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
        // save to sql
        $nisn = $this->input->post('nisn');
        $foto = $this->input->file('foto')['name'];
        $kartu_keluarga = $this->input->file('kartu_keluarga')['name'];
        $ijazah = $this->input->file('ijazah')['name'];
        $skhun = $this->input->file('skhun')['name'];
        $raport = $this->input->file('raport')['name'];
        $keterangan_sehat = $this->input->file('keterangan_sehat')['name'];
        $lampiran = $this->input->file('lampiran')['name']; 

        // save to folder
        $upload_path = 'files/';
        $tmpfoto = $this->input->file('foto')['tmp_name'];
        $tmpkartu_keluarga = $this->input->file('kartu_keluarga')['tmp_name'];
        $tmpijazah = $this->input->file('ijazah')['tmp_name'];
        $tmpskhun = $this->input->file('skhun')['tmp_name'];
        $tmpraport = $this->input->file('raport')['tmp_name'];
        $tmpketerangan_sehat = $this->input->file('keterangan_sehat')['tmp_name'];
        $tmplampiran = $this->input->file('lampiran')['tmp_name'];  

        move_uploaded_file($tmpfoto, $upload_path .'foto/' . $foto);
		move_uploaded_file($tmpkartu_keluarga, $upload_path .'kartu keluarga/' .$kartu_keluarga);
		move_uploaded_file($tmpijazah, $upload_path .'ijazah/' . $ijazah);
		move_uploaded_file($tmpskhun, $upload_path  .'skhun/' . $skhun);
		move_uploaded_file($tmpraport, $upload_path  .'raport/' . $raport);
		move_uploaded_file($tmpketerangan_sehat, $upload_path  .'keterangan sehat/' . $keterangan_sehat);
		move_uploaded_file($tmplampiran, $upload_path  .'lampiran/' . $lampiran);

        
        $data = $this->model('Data2')->findWhere(['nisn' => $nisn]);
        if ($data != null ) 
        {
            $this->response(409,'Nisn sudah terdaftar');
            exit;
        }
        else{
            $store = $this->model('Data2')->create([
                'nisn' => $nisn,
                'foto' => $foto,
                'kartu_keluarga' => $kartu_keluarga,
                'ijazah' => $ijazah,
                'skhun' => $skhun,
                'raport' => $raport,
                'keterangan_sehat' => $keterangan_sehat,
                'lampiran' => $lampiran,
    
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
        // save to sql
        $nisn = $this->input->post('nisn');
        $foto = $this->input->file('foto')['name'];
        $kartu_keluarga = $this->input->file('kartu_keluarga')['name'];
        $ijazah = $this->input->file('ijazah')['name'];
        $skhun = $this->input->file('skhun')['name'];
        $raport = $this->input->file('raport')['name'];
        $keterangan_sehat = $this->input->file('keterangan_sehat')['name'];
        $lampiran = $this->input->file('lampiran')['name']; 

        // save to folder
        $upload_path = 'files/';
        $tmpfoto = $this->input->file('foto')['tmp_name'];
        $tmpkartu_keluarga = $this->input->file('kartu_keluarga')['tmp_name'];
        $tmpijazah = $this->input->file('ijazah')['tmp_name'];
        $tmpskhun = $this->input->file('skhun')['tmp_name'];
        $tmpraport = $this->input->file('raport')['tmp_name'];
        $tmpketerangan_sehat = $this->input->file('keterangan_sehat')['tmp_name'];
        $tmplampiran = $this->input->file('lampiran')['tmp_name'];  

        move_uploaded_file($tmpfoto, $upload_path .'foto/' . $foto);
		move_uploaded_file($tmpkartu_keluarga, $upload_path .'kartu keluarga/' .$kartu_keluarga);
		move_uploaded_file($tmpijazah, $upload_path .'ijazah/' . $ijazah);
		move_uploaded_file($tmpskhun, $upload_path  .'skhun/' . $skhun);
		move_uploaded_file($tmpraport, $upload_path  .'raport/' . $raport);
		move_uploaded_file($tmpketerangan_sehat, $upload_path  .'keterangan sehat/' . $keterangan_sehat);
		move_uploaded_file($tmplampiran, $upload_path  .'lampiran/' . $lampiran);

        $data = ([
            'nisn' => $nisn,
            'foto' => $foto,
            'kartu_keluarga' => $kartu_keluarga,
            'ijazah' => $ijazah,
            'skhun' => $skhun,
            'raport' => $raport,
            'keterangan_sehat' => $keterangan_sehat,
            'lampiran' => $lampiran,
        
        ]);
        
        $data = $this->model('Data2')->find($id);
        if(!$data){
            $this->response(404,'Data tidak ditemukan');
            exit;
        }else{
            $data = $this->input->post();  
            // var_dump($data); die;
            $update =$this->model('Data2')->update($id, $data);
            // var_dump($update); die;
            $this->response(201,
            [
                'message' => 'Data berhasil diupdate',
                'data' =>$update, $data
            ]);
        }

    }

}
