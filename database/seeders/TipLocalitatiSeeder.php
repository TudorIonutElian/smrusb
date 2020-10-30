<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipLocalitatiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tip_localitate')->insert(
            array(
                ['mediu'  => 'rural'],
                ['mediu'  => 'urban']
                
            )
        );
    }
}
