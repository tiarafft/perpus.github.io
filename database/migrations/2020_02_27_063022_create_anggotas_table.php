<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 75)->nullable();
            $table->string('angkatan', 4)->nullable();
            $table->string('jurusan', 35)->nullable();
            $table->enum('gender', array('L', 'P'))->nullable();
            $table->string('tempatl', 30)->nullable();
            $table->date('tanggall')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota');
    }
}
