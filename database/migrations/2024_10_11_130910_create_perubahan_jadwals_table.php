<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perubahan_jadwals', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('nidn');
            $table->BigInteger('jadwal_praktikum')->unsigned();
            $table->foreign('jadwal_praktikum')->references('id')->on('jadwal_praktikums')->ondelete('cascade');
            $table->string('hari');
            $table->string('nama_kuliah');
            $table->string('waktu_mulai');
            $table->string('waktu_selesai');
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
        Schema::dropIfExists('perubahan_jadwals');
    }
};
