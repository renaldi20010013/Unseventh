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
            $table->string('nisn',20);
            $table->string('foto',255);
            $table->string('kk',255);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data2');
    }
};