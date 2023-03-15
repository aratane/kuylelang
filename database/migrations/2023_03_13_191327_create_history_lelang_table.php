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
        Schema::create('history_lelang', function (Blueprint $table) {
            $table->id('id_history');
            $table->unsignedBigInteger('id_lelang');
            $table->foreign('id_lelang')->references('id_lelang')->on('tb_lelang');
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')->references('id_barang')->on('tb_barang');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('tb_masyarakat');
            $table->integer('penawaran_harga');
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
        Schema::dropIfExists('history_lelang');
    }
};
