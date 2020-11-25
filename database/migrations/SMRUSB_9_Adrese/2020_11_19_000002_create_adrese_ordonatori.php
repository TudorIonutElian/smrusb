<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdreseOrdonatori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adrese_ordonatori', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tip');
            $table->unsignedBigInteger('ordonator');
            $table->unsignedBigInteger('regiune');
            $table->unsignedBigInteger('judet');
            $table->unsignedBigInteger('localitate');
            $table->string('strada', 50);
            $table->integer('numar');
            $table->integer('bloc');
            $table->string('scara');
            $table->integer('etaj');
            $table->integer('apartament');

            // Foreign Keys pentru ordonatori de credite
            $table->foreign('tip')->references('id')->on('tip_adrese');
            $table->foreign('ordonator')->references('id')->on('ordonatori');
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
        Schema::dropIfExists('adrese');
    }
}
