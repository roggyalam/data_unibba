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
        Schema::create('kehadirans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->BigInteger('jadwal_praktikum')->unsigned();
            $table->foreign('jadwal_praktikum')->references('id')->on('jadwal_praktikums')->ondelete('cascade');
            $table->BigInteger('nim')->unsigned();
            $table->foreign('nim')->references('id')->on('mahasiswas')->ondelete('cascade');
            $table->BigInteger('kode_status')->unsigned();
            $table->foreign('kode_status')->references('id')->on('status_kehadirans')->ondelete('cascade');
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
        Schema::dropIfExists('kehadirans');
    }
};
