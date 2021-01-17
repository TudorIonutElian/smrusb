<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatOrganizare extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stat_organizare', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institutie');
            $table->string('structura');
            $table->date('data_creare');
            $table->date('data_radiere')->nullable();
            $table->boolean('stare');

            $table->foreign('institutie')->references('id')->on('institutii');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stat_organizare', function (Blueprint $table){
            $table->dropForeign('stat_organizare_institutie_foreign');
        });
        Schema::dropIfExists('stat_organizare');
    }
}
