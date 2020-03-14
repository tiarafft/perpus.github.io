<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //hilangkan s pada bukus
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul', 100)->nullable;
            $table->string('pengarang', 75)->nullable;
            $table->string('penerbit', 50)->nullable;
            $table->string('tahun', 4)->nullable;
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
        //hilangkan s pada bukus
        Schema::dropIfExists('buku');
    }
}
