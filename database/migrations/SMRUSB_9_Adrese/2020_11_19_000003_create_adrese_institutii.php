<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdreseInstitutii extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adrese_institutii', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tip');
            $table->unsignedBigInteger('institutie');
            $table->unsignedBigInteger('regiune');
            $table->unsignedBigInteger('judet');
            $table->unsignedBigInteger('localitate');
            $table->string('strada', 50);
            $table->integer('numar');
            $table->integer('bloc');
            $table->string('scara');
            $table->integer('etaj');
            $table->integer('apartament');


             // Foreign Keys pentru institutii
             $table->foreign('tip')->references('id')->on('tip_adrese');
             $table->foreign('institutie')->references('id')->on('institutii');
             $table->foreign('regiune')->references('id')->on('regiuni');
             $table->foreign('judet')->references('id')->on('judete');
             $table->foreign('localitate')->references('id')->on('localitati');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tip_adrese_insitutii');
    }
}
