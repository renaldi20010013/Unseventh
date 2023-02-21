<?php

namespace App\Database\Migrations;

use App\Core\Migration;
use App\Core\Blueprint;
use App\Core\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->increment('id');
            $table->string('nama_lengkap', 50);
            $table->integer('nisn', 50);
            $table->string('status',50);
            $table->string('prodi', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peserta');
    }
};