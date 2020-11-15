<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstoricOrdonatori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istoric_ordonatori', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ordonator');
            $table->unsignedBigInteger('actiune');
            $table->date('data_operatiunii');

            $table->foreign('ordonator')->references('id')->on('ordonatori')->onDelete('cascade');
            $table->foreign('actiune')->references('id')->on('actiuni_ordonatori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('istoric_ordonatori');
    }
}