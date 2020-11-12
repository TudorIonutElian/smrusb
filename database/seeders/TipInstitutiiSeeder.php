<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipInstitutiiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tip_institutii')->insert(
            array(
                ['prescurtare' => 'IP', 'denumire'   => 'Institutie publica'],
                ['prescurtare' => 'SA', 'denumire'   => 'Societate pe Actiuni'],
                ['prescurtare' => 'SCS', 'denumire'  => 'Societate in Comandita Simpla'],
                ['prescurtare' => 'SCA', 'denumire'  => 'Societate in Comandita pe Actiuni'],
                ['prescurtare' => 'SRL', 'denumire'  => 'Societate cu Raspundere Limitata'],
                ['prescurtare' => 'RA', 'denumire'   => 'Regie Autonoma'],
            )
        );
    }
}
