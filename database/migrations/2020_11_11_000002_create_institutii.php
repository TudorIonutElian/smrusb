<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateInstitutii extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutii', function (Blueprint $table) {
            $table->id();
            $table->enum('tip', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
            $table->unsignedBigInteger('ordonator');
            $table->unsignedBigInteger('judet');
            $table->unsignedBigInteger('localitate');
            $table->string('denumire', 200);
            $table->date('data_infiintare');
            $table->boolean('stare');

            $table->foreign('ordonator')->references('id')->on('ordonatori')->onDelete('cascade');
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
        Schema::table('institutii', function (Blueprint $table){
            $table->dropForeign('institutii_judet_foreign');
            $table->dropForeign('institutii_localitate_foreign');
            $table->dropForeign('institutii_ordonator_foreign');
        });
        Schema::dropIfExists('institutii');
    }
}
