<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipAngajatiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tip_angajati')->insert(
            array(
                ['denumire' => 'Functionar public'],
                ['denumire' => 'Functionar public cu statut special'],
                ['denumire' => 'Functionar'],
                ['denumire' => 'Functionar public cu contract determinat'],
                ['denumire' => 'Functionar public cu contract nedeterminat'],
                ['denumire' => 'Functionar auxiliar'],
                ['denumire' => 'Cadru militar'],
                ['denumire' => 'Politist'],
                ['denumire' => 'Elev'],
                ['denumire' => 'Student'],
            )
        );
    }
}
