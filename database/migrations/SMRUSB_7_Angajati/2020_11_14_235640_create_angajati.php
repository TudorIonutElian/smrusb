<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAngajati extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angajati', function (Blueprint $table) {
            $table->id();
            $table->string('nume_angajat', 30);
            $table->string('prenume_angajat', 70);
            $table->date('data_nasterii', 30);
            $table->integer('cod_numeric_personal');
            $table->tinyInteger('stare');

            // Urmeaza implementarea
            $table->unsignedBigInteger('institutie_curenta');
            $table->unsignedBigInteger('functie_curenta');
            $table->unsignedTinyInteger('grad_curent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('angajati');
    }
}
