<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActiuniAngajatiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actiuni_angajati')->insert(
            array(
                ['tip_actiune' => 'Angajare'],
                ['tip_actiune' => 'Delegare'],
                ['tip_actiune' => 'Detasare'],
                ['tip_actiune' => 'Suspendare'],
                ['tip_actiune' => 'Imputernicire'],
                ['tip_actiune' => 'Mutare'],
                ['tip_actiune' => 'Incetare'],
            )
        );
    }
}
