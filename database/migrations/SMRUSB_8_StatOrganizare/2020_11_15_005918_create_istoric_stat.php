<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstoricStat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istoric_stat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stat');
            $table->unsignedBigInteger('actiune');
            $table->date('data_actiunii');

            // Foreing Keys for Istoric State de organizare
            $table->foreign('stat')->references('id')->on('stat_organizare');
            $table->foreign('actiune')->references('id')->on('actiuni_stat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('istoric_stat', function (Blueprint $table){
            $table->dropForeign('istoric_stat_actiune_foreign');
            $table->dropForeign('istoric_stat_stat_foreign');
        });
        Schema::dropIfExists('istoric_stat');
    }
}
