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

                // Insert Tip Ordonatori
                TipOrdonatoriSeeder::class,

                // Insert Ordonatori
                OrdonatoriSeeder::class,

                // Insert Tip Institutii
                TipInstitutiiSeeder::class,

                // Insert Institutii
                InstitutiiSeeder::class,

                // Insert Tip Angajati
                TipAngajatiSeeder::class,

                // Insert Actiuni Ordonatori
                ActiuniOrdonatoriSeeder::class,

                // Insert Actiuni Angajati
                ActiuniAngajatiSeeder::class,

                // Insert Actiuni Angajati
                PosturiAprobateSeeder::class
            ]
        );
    }
}
