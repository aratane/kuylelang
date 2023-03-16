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
        Schema::create('tb_bayar', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->enum('pembayaran', ['dana', 'shopeepay', 'bca', 'bri', 'cash', 'ovo']);
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
        Schema::dropIfExists('tb_bayar');
    }
};
