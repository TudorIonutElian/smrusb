<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActiuniOrdonatoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actiuni_ordonatori')->insert(
            array(
                ['tip_actiune' => 'Infiintare'],
                ['tip_actiune' => 'Suspendare'],
                ['tip_actiune' => 'Reluare'],
                ['tip_actiune' => 'Radiere']
            )
        );
    }
}
