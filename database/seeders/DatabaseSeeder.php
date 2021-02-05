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
                // Insert Regiuni
                RegiuniSeeder::class,

                // Insert Judete
                JudeteSeeder::class,

                // Insert Localitati
                LocalitatiSeeder::class,

                // Insert Familii Ocupationale
                FamiliiOcupationaleSeeder::class,

                // Insert Ordonatori
                OrdonatoriSeeder::class,

                // Insert Institutii
                InstitutiiSeeder::class,

                // Insert Actiuni Angajati
                PosturiAprobateSeeder::class
            ]
        );
    }
}
