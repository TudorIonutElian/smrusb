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
            $table->unsignedBigInteger('familie')->nullable();
            $table->string('denumire', 100);
            $table->enum('tip_ordonator', [1,2,3]);
            $table->unsignedBigInteger('judet');
            $table->unsignedBigInteger('localitate');
            $table->date('data_infiintare');
            $table->boolean('stare');

            $table->foreign('familie')->references('id')->on('familii_ocupationale')->onDelete('cascade');
            $table->foreign('judet')->references('id')->on('judete')->onDelete('cascade');
            $table->foreign('localitate')->references('id')->on('localitati')->onDelete('cascade');
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
            $table->dropForeign('ordonatori_familie_foreign');
            $table->dropForeign('ordonatori_judet_foreign');
            $table->dropForeign('ordonatori_localitate_foreign');
        });
        Schema::dropIfExists('ordonatori');
    }
}
