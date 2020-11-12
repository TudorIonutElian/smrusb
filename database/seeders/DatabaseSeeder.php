<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                RegiuniSeeder::class,
                JudeteSeeder::class,
                LocalitatiSeeder::class,
                FamiliiOcupationaleSeeder::class,
                TipOrdonatoriSeeder::class,
                OrdonatoriSeeder::class,
                TipInstitutiiSeeder::class,
                InstitutiiSeeder::class
            ]
        );
    }
}
