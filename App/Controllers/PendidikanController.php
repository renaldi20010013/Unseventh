<?php

namespace App\Controllers;

use App\Core\Controller;

class PendidikanController extends Controller
{
    public function index()
    {
        $data = $this->model('Pendidikan')->all();
        $this->response(200, $data);
    }

    public function show($id)
    {
        $data = $this->model('Pendidikan')->find($id);
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
        $jenis_pendidikan_sd = $this->input->post('jenis_pendidikan_sd');
        $nama_sekolah_sd = $this->input->post('nama_sekolah_sd');
        $kota_sd = $this->input->post('kota_sd');
        $tahun_lulus_sd = $this->input->post('tahun_lulus_sd');
        $nilai_sd = $this->input->post('nilai_sd');

        $jenis_pendidikan_smp = $this->input->post('jenis_pendidikan_smp');
        $nama_sekolah_smp = $this->input->post('nama_sekolah_smp');
        $akreditasi_smp = $this->input->post('akreditasi_smp');
        $tahun_lulus_smp = $this->input->post('tahun_lulus_smp');
        $kota_smp = $this->input->post('kota_smp');
        $nilai_smp = $this->input->post('nilai_smp');

        $jenis_pendidikan_smk = $this->input->post('jenis_pendidikan_smk');
        $nama_sekolah_smk = $this->input->post('nama_sekolah_smk');
        $akreditasi_smk = $this->input->post('akreditasi_smk');
        $tahun_lulus_smk = $this->input->post('tahun_lulus_smk');
        $kota_smk = $this->input->post('kota_smk');
        $nilai_smk = $this->input->post('nilai_smk');

        $data = ([
            'jenis_pendidikan_sd' => $jenis_pendidikan_sd,
            'nama_sekolah_sd' => $nama_sekolah_sd,
            'kota_sd' => $kota_sd,
            'tahun_lulus_sd' => $tahun_lulus_sd,
            'nilai_sd' => $nilai_sd,

            'jenis_pendidikan_smp' => $jenis_pendidikan_smp,
            'nama_sekolah_smp' => $nama_sekolah_smp,
            'akreditasi_smp' => $akreditasi_smp,
            'tahun_lulus_smp' => $tahun_lulus_smp,
            'kota_smp' => $kota_smp,
            'nilai_smp' => $nilai_smp,

            'jenis_pendidikan_smk' => $jenis_pendidikan_smk,
            'nama_sekolah_smk' => $nama_sekolah_smk,
            'akreditasi_smk' => $akreditasi_smk,
            'tahun_lulus_smk' => $tahun_lulus_smk,
            'kota_smk' => $kota_smk,
            'nilai_smk' => $nilai_smk,
        ]);

        $store = $this->model('Pendidikan')->create($data);
        $this->response(201,
        [
            'status' => 'success',
            'data' => $store, $data
        ]);
    }

    public function update(int $id)
    {
        $jenis_pendidikan_sd = $this->input->post('jenis_pendidikan_sd');
        $nama_sekolah_sd = $this->input->post('nama_sekolah_sd');
        $kota_sd = $this->input->post('kota_sd');
        $tahun_lulus_sd = $this->input->post('tahun_lulus_sd');
        $nilai_sd = $this->input->post('nilai_sd');

        $jenis_pendidikan_smp = $this->input->post('jenis_pendidikan_smp');
        $nama_sekolah_smp = $this->input->post('nama_sekolah_smp');
        $akreditasi_smp = $this->input->post('akreditasi_smp');
        $tahun_lulus_smp = $this->input->post('tahun_lulus_smp');
        $kota_smp = $this->input->post('kota_smp');
        $nilai_smp = $this->input->post('nilai_smp');

        $jenis_pendidikan_smk = $this->input->post('jenis_pendidikan_smk');
        $nama_sekolah_smk = $this->input->post('nama_sekolah_smk');
        $akreditasi_smk = $this->input->post('akreditasi_smk');
        $tahun_lulus_smk = $this->input->post('tahun_lulus_smk');
        $kota_smk = $this->input->post('kota_smk');
        $nilai_smk = $this->input->post('nilai_smk');

        $data = ([
            'jenis_pendidikan_sd' => $jenis_pendidikan_sd,
            'nama_sekolah_sd' => $nama_sekolah_sd,
            'kota_sd' => $kota_sd,
            'tahun_lulus_sd' => $tahun_lulus_sd,
            'nilai_sd' => $nilai_sd,

            'jenis_pendidikan_smp' => $jenis_pendidikan_smp,
            'nama_sekolah_smp' => $nama_sekolah_smp,
            'akreditasi_smp' => $akreditasi_smp,
            'tahun_lulus_smp' => $tahun_lulus_smp,
            'kota_smp' => $kota_smp,
            'nilai_smp' => $nilai_smp,

            'jenis_pendidikan_smk' => $jenis_pendidikan_smk,
            'nama_sekolah_smk' => $nama_sekolah_smk,
            'akreditasi_smk' => $akreditasi_smk,
            'tahun_lulus_smk' => $tahun_lulus_smk,
            'kota_smk' => $kota_smk,
            'nilai_smk' => $nilai_smk,
        ]);

        $find = $this->model('Pendidikan')->find($id);
        if(!$find){
            $this->response(404,'Data tidak ditemukan');
            exit;
        }else{
            $data = $this->input->put();
            $update =$this->model('Pendidikan')->update($id, $data);
            $this->response(201,
            [
                'message' => 'Data berhasil diupdate',
                'data' => $update, $data
            ]);
        }
    }
}
