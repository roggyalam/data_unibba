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
        Schema::create('detail_kelas', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('kode_kelas')->unsigned();
            $table->foreign('kode_kelas')->references('id')->on('kelas_praktikums')->ondelete('cascade');
            $table->BigInteger('nim')->unsigned();
            $table->foreign('nim')->references('id')->on('mahasiswas')->ondelete('cascade');
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
        Schema::dropIfExists('detail_kelas');
    }
};
