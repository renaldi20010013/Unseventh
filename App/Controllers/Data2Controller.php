<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;

class Data2Controller extends Controller
{
    // public function show($id)
    // {
    //     $data = $this->model('Data2')->find($id);
    //     if ($data == null){
    //         $this->response(404,'Data tidak ditemukan');
    //         exit;
    //     }
    //     else{
    //         $this->response(200, $data);
    //     }

    // }

    public function upload()
    {
        $nisn = $this->input->post('nisn');
        $foto = $this->input->file('foto');
        $kk = $this->input->file('kk');

        $data = [
                'nisn' => $nisn,
                'foto' => $foto,
                'kk' => $kk,
        ];

        $this->model('Data2')->create($data);

        $this->response(200, $data);
    }

    // public function upload(){

    //     $koneksi = mysqli_connect("localhost","root","","lat");
    //     $nama = $_POST['nama'];
    //     $foto = $_FILES['foto']['name'];
    //     $tmp = $_FILES['foto']['tmp_name'];
    //     $kk = $_FILES['kk']['name'];
    //     $tmp2 = $_FILES['kk']['tmp_name'];
        
    //     $rand = rand();
    //     $ekstensi =  array('png','jpg','jpeg','gif');
    //     $filename = $_FILES['foto']['name'];
    //     $ukuran = $_FILES['foto']['size'];
    //     $ext = pathinfo($filename, PATHINFO_EXTENSION);
        
        
    //     if($ukuran < 1044070){		
    //         $xx = $rand.'_'.$filename;
    //         move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
    //         mysqli_query($koneksi, "INSERT INTO user VALUES(NULL,'$nama','$xx')");
    //         header("location:index.php?alert=berhasil");
    //     }else{
    //          header("location:index.php?alert=gagak_ukuran");
            
    //     }
    // }

}
