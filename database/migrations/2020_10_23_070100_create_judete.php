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
            $table->unsignedBigInteger('resedinta')->nullable();


            $table->foreign('regiune')->references('id')->on('regiuni');
        });

        // Inserare Judete in tabel
        DB::table('judete')->insert(
            array(
                // Inserare judete Regiunea Nord Est
                ['denumire' => 'Bacau', 'regiune'=> 1, 'resedinta' => NULL],
                ['denumire' => 'Botosani', 'regiune'=> 1, 'resedinta' => NULL],
                ['denumire' => 'Iasi', 'regiune'=> 1, 'resedinta' => NULL],
                ['denumire' => 'Neamt', 'regiune'=> 1, 'resedinta' => NULL],
                ['denumire' => 'Suceava', 'regiune'=> 1, 'resedinta' => NULL],
                ['denumire' => 'Vaslui', 'regiune'=> 1, 'resedinta' => NULL],

                // Inserare judete Regiunea Sud Est
                ['denumire' => 'Braila', 'regiune'=> 2, 'resedinta' => NULL],
                ['denumire' => ' Buzau', 'regiune'=> 2, 'resedinta' => NULL],
                ['denumire' => 'Constanta', 'regiune'=> 2, 'resedinta' => NULL],
                ['denumire' => 'Galati', 'regiune'=> 2, 'resedinta' => NULL],
                ['denumire' => 'Tulcea', 'regiune'=> 2, 'resedinta' => NULL],
                ['denumire' => 'Vrancea', 'regiune'=> 2, 'resedinta' => NULL],

                // Inserare judete Regiunea Sud Est
                ['denumire' => 'Argeș', 'regiune'=> 3, 'resedinta' => NULL],
                ['denumire' => 'Calrasi', 'regiune'=> 3, 'resedinta' => NULL],
                ['denumire' => 'Dambovia', 'regiune'=> 3, 'resedinta' => NULL],
                ['denumire' => 'Giurgiu', 'regiune'=> 3, 'resedinta' => NULL],
                ['denumire' => 'Ialomita', 'regiune'=> 3, 'resedinta' => NULL],
                ['denumire' => 'Prahova', 'regiune'=> 3, 'resedinta' => NULL],
                ['denumire' => 'Teleorman', 'regiune'=> 3, 'resedinta' => NULL],

                // Inserare judete Regiunea Sud Vest Oltenia
                ['denumire' => 'Dolj', 'regiune'=> 4, 'resedinta' => NULL],
                ['denumire' => 'Gorj', 'regiune'=> 4, 'resedinta' => NULL],
                ['denumire' => 'Mehedinti', 'regiune'=> 4, 'resedinta' => NULL],
                ['denumire' => 'Olt', 'regiune'=> 4, 'resedinta' => NULL],
                ['denumire' => 'Valcea', 'regiune'=> 4, 'resedinta' => NULL],


                 // Inserare judete Regiunea Vest
                 ['denumire' => 'Arad', 'regiune'=> 5, 'resedinta' => NULL],
                 ['denumire' => 'Caras-Severin', 'regiune'=> 5, 'resedinta' => NULL],
                 ['denumire' => 'Hunedoara', 'regiune'=> 5, 'resedinta' => NULL],
                 ['denumire' => 'Timis', 'regiune'=> 5, 'resedinta' => NULL],

                 // Inserare judete Regiunea Nord-Vest
                 ['denumire' => 'Bihor', 'regiune'=> 6, 'resedinta' => NULL],
                 ['denumire' => 'Bistrita-Nasaud', 'regiune'=> 6, 'resedinta' => NULL],
                 ['denumire' => 'Cluj', 'regiune'=> 6, 'resedinta' => NULL],
                 ['denumire' => 'Maramures', 'regiune'=> 6, 'resedinta' => NULL],
                 ['denumire' => 'Satu-Mare', 'regiune'=> 6, 'resedinta' => NULL],
                 ['denumire' => 'Salaj', 'regiune'=> 6, 'resedinta' => NULL],

                // Inserare judete Regiunea Centru
                ['denumire' => 'Alba', 'regiune'=> 7, 'resedinta' => NULL],
                ['denumire' => 'Brașov', 'regiune'=> 7, 'resedinta' => NULL],
                ['denumire' => 'Covasna', 'regiune'=> 7, 'resedinta' => NULL],
                ['denumire' => 'Harghita', 'regiune'=> 7, 'resedinta' => NULL],
                ['denumire' => 'Mures', 'regiune'=> 7, 'resedinta' => NULL],
                ['denumire' => 'Sibiu', 'regiune'=> 7, 'resedinta' => NULL],

                // Inserare judete Regiunea Bucuresti Ilfov
                ['denumire' => 'Ilfov', 'regiune'=> 8, 'resedinta' => NULL],
                ['denumire' => 'Sector 1', 'regiune'=> 8, 'resedinta' => NULL],
                ['denumire' => 'Sector 2', 'regiune'=> 8, 'resedinta' => NULL],
                ['denumire' => 'Sector 3', 'regiune'=> 8, 'resedinta' => NULL],
                ['denumire' => 'Sector 4', 'regiune'=> 8, 'resedinta' => NULL],
                ['denumire' => 'Sector 5', 'regiune'=> 8, 'resedinta' => NULL],
                ['denumire' => 'Sector 6', 'regiune'=> 8, 'resedinta' => NULL],

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
        Schema::dropIfExists('judete');
    }
}
