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
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->enum('metode', ['cod', 'online']);
            $table->unsignedBigInteger('id_pembayaran');
            $table->foreign('id_pembayaran')->references('id_pembayaran')->on('tb_bayar');
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')->references('id_barang')->on('tb_barang');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('tb_masyarakat');
            $table->unsignedBigInteger('id_petugas');
            $table->foreign('id_petugas')->references('id_petugas')->on('tb_petugas');
            $table->unsignedBigInteger('id_testimoni');
            $table->foreign('id_testimoni')->references('id_testimoni')->on('tb_testimoni');
            $table->string('keterangan');
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
        Schema::dropIfExists('tb_transaksi');
    }
};
