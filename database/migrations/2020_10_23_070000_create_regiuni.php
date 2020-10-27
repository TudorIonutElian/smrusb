<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRegiuni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regiuni', function (Blueprint $table) {
            $table->id();
            $table->string('denumire', 40);
        });

        DB::table('regiuni')->insert(
            array(
                'denumire'  => 'Regiunea Nord-Est',
                'denumire'  => 'Regiunea Sud-Est',
                'denumire'  => 'Regiunea Sud - Muntenia',
                'denumire'  => 'Regiunea Sud-Vest Oltenia',
                'denumire'  => 'Regiunea Vest',
                'denumire'  => 'Regiunea Nord-Vest',
                'denumire'  => 'Regiunea Centru',
                'denumire'  => 'Regiunea București - Ilfov'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regiuni');
    }
}
