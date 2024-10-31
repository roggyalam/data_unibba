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
        Schema::create('jadwal_praktikums', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_ajaran');
            $table->string('semester');
            $table->BigInteger('kode_matakuliah')->unsigned();
            $table->foreign('kode_matakuliah')->references('id')->on('matakuliahs')->ondelete('cascade');
            $table->BigInteger('nidn')->unsigned();
            $table->foreign('nidn')->references('id')->on('dosens')->ondelete('cascade');
            $table->BigInteger('kode_ruang')->unsigned();
            $table->foreign('kode_ruang')->references('id')->on('ruang_labs')->ondelete('cascade');
            $table->BigInteger('kode_kelas')->unsigned();
            $table->foreign('kode_kelas')->references('id')->on('kelas_praktikums')->ondelete('cascade');
            $table->string('hari');
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
        Schema::dropIfExists('jadwal_praktikums');
    }
};
