<?php

namespace App\Database\Migrations;

use App\Core\Migration;
use App\Core\Blueprint;
use App\Core\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('data2', function (Blueprint $table) {
            $table->increment('id');
            $table->integer('nisn', 50);
            $table->string('foto', 50);
            $table->string('kartu_keluarga', 50);
            $table->string('ijazah', 50);
            $table->string('skhun', 50);
            $table->string('raport', 50);
            $table->string('keterangan_sehat', 50);
            $table->string('lampiran', 50);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data2');
    }
};