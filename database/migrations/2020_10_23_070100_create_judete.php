<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateJudete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judete', function (Blueprint $table) {
            $table->id();
            $table->string('denumire', 30);
            $table->unsignedBigInteger('regiune');

            $table->foreign('regiune')->references('id')->on('regiuni');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judete');
    }
}
