<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosturiAprobateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posturi_aprobate')->insert(
            array(
                ['ordonator_id'  => 1, 'total'  => 3000, 'status'  => 0],
                ['ordonator_id'  => 2, 'total'  => 3000, 'status'  => 1],
                ['ordonator_id'  => 3, 'total'  => 3000, 'status'  => 1],
                ['ordonator_id'  => 1, 'total'  => 2550, 'status'  => 1]
            )
        );
    }
}
