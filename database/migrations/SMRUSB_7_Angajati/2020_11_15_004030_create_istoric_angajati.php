<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstoricAngajati extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istoric_angajati', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('angajat');
            $table->unsignedBigInteger('institutie_curenta');
            $table->unsignedBigInteger('institutie_destinatara');
            $table->unsignedBigInteger('actiune');
            $table->date('data_inceput');
            $table->date('data_sfarsit')->nullable();


            // Definire Foreign Keys pentru Istoric Angajati
            $table->foreign('angajat')->references('id')->on('angajati');
            $table->foreign('institutie_curenta')->references('id')->on('institutii');
            $table->foreign('institutie_destinatara')->references('id')->on('institutii');
            $table->foreign('actiune')->references('id')->on('actiuni_angajati');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('istoric_angajati');
    }
}
