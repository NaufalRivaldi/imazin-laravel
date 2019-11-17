<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePorfolioGambarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porfolio_gambar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->binary('gambar');

            // fk
            $table->unsignedBigInteger('porfolio_id');
            $table->foreign('porfolio_id')
                    ->references('id')
                    ->on('porfolio')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('porfolio_gambar');
    }
}
