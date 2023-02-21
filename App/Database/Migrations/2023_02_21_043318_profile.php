<?php

namespace App\Database\Migrations;

use App\Core\Migration;
use App\Core\Blueprint;
use App\Core\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increment('id');
            $table->integer('no_peserta', 50);
            $table->string('nama_lengkap', 50);
            $table->string('tempat_lahir', 50);
            $table->string('tanggal_lahir', 50);
            $table->string('agama', 50);
            $table->string('jenis_kelamin', 50);
            $table->string('alamat', 50);
            $table->integer('nisn', 50);
            $table->string('prodi', 50);
            $table->string('cita_cita', 50);
            $table->string('motivasi', 150);
            $table->integer('role_id', 50);
            $table->index('role_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile');
    }
};