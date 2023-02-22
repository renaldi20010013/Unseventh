<?php

namespace App\Database\Migrations;

use App\Core\Migration;
use App\Core\Blueprint;
use App\Core\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->increment('id');
            $table->string('jenis_pendidikan_sd');
            $table->string('nama_sekolah_sd');
            $table->string('kota_sd');
            $table->string('tahun_lulus_sd');
            $table->string('nilai_sd');

            $table->string('jenis_pendidikan_smp');
            $table->string('nama_sekolah_smp');
            $table->string('akreditasi_smp');
            $table->string('tahun_lulus_smp');
            $table->string('kota_smp');
            $table->string('nilai_smp');

            $table->string('jenis_pendidikan_smk');
            $table->string('nama_sekolah_smk');
            $table->string('akreditasi_smk');
            $table->string('tahun_lulus_smk');
            $table->string('kota_smk');
            $table->string('nilai_smk');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendidikan');
    }
};