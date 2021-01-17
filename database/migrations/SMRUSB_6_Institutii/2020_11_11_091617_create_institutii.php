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
            $table->unsignedBigInteger('ordonator_principal');
            $table->unsignedBigInteger('ordonator_secundar')->nullable();
            $table->unsignedBigInteger('ordonator_tertiar')->nullable();
            $table->unsignedBigInteger('tip_institutie');
            $table->unsignedBigInteger('judet');
            $table->unsignedBigInteger('localitate');
            $table->string('denumire', 200);
            $table->date('data_infiintare');
            $table->boolean('stare');

            $table->foreign('ordonator_principal')->references('id')->on('ordonatori')->onDelete('cascade');
            $table->foreign('ordonator_secundar')->references('id')->on('ordonatori')->onDelete('cascade');
            $table->foreign('ordonator_tertiar')->references('id')->on('ordonatori')->onDelete('cascade');
            $table->foreign('tip_institutie')->references('id')->on('tip_institutii')->onDelete('cascade');
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
            $table->dropForeign('institutii_ordonator_principal_foreign');
            $table->dropForeign('institutii_ordonator_secundar_foreign');
            $table->dropForeign('institutii_ordonator_tertiar_foreign');
            $table->dropForeign('institutii_tip_institutie_foreign');
        });
        Schema::dropIfExists('institutii');
    }
}
