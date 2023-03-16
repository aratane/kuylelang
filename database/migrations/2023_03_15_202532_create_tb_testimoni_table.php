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
        Schema::create('tb_testimoni', function (Blueprint $table) {
            $table->id('id_testimoni');
            $table->enum('kepuasan', ['buruk', 'cukup', 'puas', 'senang', 'bahagia']);
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
        Schema::dropIfExists('tb_testimoni');
    }
};
