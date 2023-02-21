<?php

namespace App\Database\Migrations;

use App\Core\Migration;
use App\Core\Blueprint;
use App\Core\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('registrasi', function (Blueprint $table) {
            $table->increment('reg_id');
            $table->string('nama_lengkap', 50);
            $table->string('username', 50);
            $table->integer('no_telepon', 50);
            $table->string('email', 50);
            $table->string('password', 255);
            $table->integer('role_id');
            $table->index('role_id');
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrasi');
    }
};