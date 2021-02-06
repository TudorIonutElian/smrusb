<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdonatoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ordonatori')->insert(
            array(
                ['familie' => 1, 'denumire'  => 'Ministerul Finantelor Publice', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Afacerilor Interne', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Afacerilor Externe', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Justitiei', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Apararii Nationale', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Economiei, Energiei si Mediului de Afaceri', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Transporturilor, Infrastructurii si Comunicatiilor', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Agriculturii si Dezvoltarii Rurale', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Lucrarilor Publice, Dezvoltarii si Administratiei', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Fondurilor Europene', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Sanatatii', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Educatiei si Cercetarii', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Culturii', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Tineretului si Sportului', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['familie' => 1, 'denumire'  => 'Ministerul Muncii si Protectiei Sociale', 'tip_ordonator' => 1, 'judet' => 42, 'localitate' => 13802, 'data_infiintare' => '2020-10-31', 'stare' => 1]
            )
        );
        /*
         $table->id();
            $table->string('denumire', 50);
            $table->unsignedBigInteger('tip_ordonator');
            $table->unsignedBigInteger('judet');
            $table->date('data_infiintare');
            $table->boolean('stare');

        */
    }
}
