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
            $table->string('cod_numeric_personal', 13);
            $table->tinyInteger('stare');
            $table->enum('tip', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
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
