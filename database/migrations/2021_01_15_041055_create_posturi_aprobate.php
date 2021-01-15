<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosturiAprobate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posturi_aprobate', function (Blueprint $table) {
            // Creare tabel cu posturi aprobate pentru fiecare ordonator

            $table->id('ordonator_id');
            $table->bigInteger('total');

            $table->foreign('ordonator_id')->references('id')->on('ordonatori')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posturi_aprobate');
    }
}
