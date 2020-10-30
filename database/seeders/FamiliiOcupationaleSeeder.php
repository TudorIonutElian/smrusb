<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamiliiOcupationaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('familii_ocupationale')->insert(
            array(
                ['denumire'  => 'I - Invatamant'],
                ['denumire'  => 'II - Sanatate si asistenta sociala'],
                ['denumire'  => 'III - Cultura'],
                ['denumire'  => 'IV - Diplomatie'],
                ['denumire'  => 'V - Justitie si Curtea Constitutionala'],
                ['denumire'  => 'VI - Aparare, Ordine Publica si Securitate Nationala']
            )
        );
    }
}
