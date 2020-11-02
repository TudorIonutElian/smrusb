<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipOrdonatoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tip_ordonatori')->insert(
            array(
                ['denumire'  => 'Ordonator principal de credite'],
                ['denumire'  => 'Ordonator secundar de credite'],
                ['denumire'  => 'Ordonator tertiar de credite']
            )
        );
    }
}
