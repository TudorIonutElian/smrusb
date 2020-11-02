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
            $table->string('denumire', 100);
            $table->unsignedBigInteger('tip_ordonator');
            $table->date('data_infiintare');
            $table->boolean('stare');

            $table->foreign('tip_ordonator')->references('id')->on('tip_ordonatori')->onDelete('cascade');
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
            $table->dropForeign('ordonatori_tip_ordonator_foreign');
        });
        Schema::dropIfExists('ordonatori');
    }
}
