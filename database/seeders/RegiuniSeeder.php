<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RegiuniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regiuni')->insert(
            array(
                ['denumire'  => 'Regiunea Nord-Est'],
                ['denumire'  => 'Regiunea Sud-Est'],
                ['denumire'  => 'Regiunea Sud - Muntenia'],
                ['denumire'  => 'Regiunea Sud-Vest Oltenia'],
                ['denumire'  => 'Regiunea Vest'],
                ['denumire'  => 'Regiunea Nord-Vest'],
                ['denumire'  => 'Regiunea Centru'],
                ['denumire'  => 'Regiunea București - Ilfov']
            )
        );
    }
}
