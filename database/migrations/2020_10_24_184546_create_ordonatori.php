<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdonatori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonatori', function (Blueprint $table) {
            $table->id();
            $table->string('denumire', 50);
            $table->unsignedBigInteger('tip');
            $table->date('data_infiintare');
            $table->date('data_radiere');
            $table->boolean('stare');

            $table->foreign('tip')->references('id')->on('tip_ordonatori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ordonatori', function (Blueprint $table){
            $table->dropForeign('ordonatori_tip_foreign');
        });
        Schema::dropIfExists('ordonatori');
    }
}
