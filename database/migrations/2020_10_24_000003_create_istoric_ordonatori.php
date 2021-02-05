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
            $table->date('data_operatiunii')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('ordonator')->references('id')->on('ordonatori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('istoric_ordonatori', function (Blueprint $table){
            $table->dropForeign('istoric_ordonatori_ordonator_foreign');
        });
        Schema::dropIfExists('istoric_ordonatori');
    }
}
