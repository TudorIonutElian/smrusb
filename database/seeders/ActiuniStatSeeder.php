<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActiuniStatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actiuni_stat')->insert(
            array(
                ['tip_actiune' => 'Infiintare'],
                ['tip_actiune' => 'Radiere']
            )
        );
    }
}
