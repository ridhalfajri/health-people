<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiVaksinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_vaksin', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->tinyInteger('provinsi_id');
            $table->string('nama_tempat');
            $table->string('alamat_lengkap');
            $table->string('no_telp');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('lokasi_vaksin');
    }
}
