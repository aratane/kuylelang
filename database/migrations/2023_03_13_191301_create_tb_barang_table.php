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
        Schema::create('tb_barang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('foto');
            $table->string('nama_barang');
            $table->date('tgl');
            $table->integer('harga_awal');
            $table->string('deskripsi_barang');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('tb_masyarakat');
            $table->unsignedBigInteger('id_petugas');
            $table->foreign('id_petugas')->references('id_petugas')->on('tb_petugas');
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
        Schema::dropIfExists('tb_barang');
    }
};
