<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstitutiiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutii')->insert(
            array(
                // Institutii in subordinea Ministerului Finantelor Publice
                ['ordonator' => 1, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Agenția Nationala de Administrare Fiscala', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 1, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Oficiul National pentru Achizitii Centralizate', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 1, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Oficiul National pentru Jocuri de Noroc', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 1, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Oficiul National de Prevenire si Combatere a Spalarii Banilor', 'data_infiintare' => '2020-10-31', 'stare' => 1],

                ['ordonator' => 1, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Autoritatea pentru Supravegherea Publica a Activitatii de Audit Statutar', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 1, 'tip' => 2, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Compania Naționala Imprimeria Naționala - S.A.', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 1, 'tip' => 2, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'CEC BANK – S.A.', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 1, 'tip' => 2, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Banca de Export - Import a Romaniei EXIMBANK - S.A', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 1, 'tip' => 2, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Fondul Roman de Contragarantare S.A.', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 1, 'tip' => 2, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Fondul National de Garantare a Creditelor pentru Intreprinderi Mici si Mijlocii - F.N.G.C.I.M.M. S.A. – IFN', 'data_infiintare' => '2020-10-31', 'stare' => 1],

                // Institutii in subordinea Ministerul Afacerilor Interne

                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'MAI-Aparat Central', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Politia Romana', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Jandarmeria Romana', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Poltia de Frontiera Romana', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Inspectoratul General pentru Situatii de Urgenta', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Inspectoratul General pentru Imigrari', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Inspectoratul General pentru Aviatie', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Directia Generala de Protectie interna', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Directia Generala Anticoruptie', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Administratia Nationala a Rezervelor de Stat si Probleme Speciale', 'data_infiintare' => '2020-10-31', 'stare' => 1],

                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Institutia Prefectului', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Directia Generala de Pasapoarte', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Directia Pentru Evidenta Persoanelor si Administrarea Bazelor de Date', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Directia Regim Persmise si Inmatriculare a Vehiculelor', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Agentia Nationala Antidrog', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Agentia Nationala Impotriva Traficului de Persoane', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Arhivele Nationale ', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Academia de Politie Alexandru Ioan Cuza ', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Institutul de Studii pentru Ordine Publica ', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Centrul National SIS ', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Casa de Pensii Sectoriala a MAI ', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Clubul Sportiv Dinamo Bucuresti ', 'data_infiintare' => '2020-10-31', 'stare' => 1],
                ['ordonator' => 2, 'tip' => 1, 'judet' => 42, 'localitate' => 13802, 'denumire' => 'Centrul de Psihologie al MAI ', 'data_infiintare' => '2020-10-31', 'stare' => 1]

                // Institutii in subordinea Ministerul Afacerilor Externe


                /*
                    1 - Institutie Publica
                    2 - Societate pe Actiuni
                    3 - Societate in Comandita Simpla
                    4 - Societate in comandita pe actiuni
                    5 - Societate cu Raspundere limitata
                    6 - Regie Autonoma
                */
                // Institutii in subordinea Ministerul Justitiei
                // Institutii in subordinea Ministerul Apararii Nationale
                // Institutii in subordinea Ministerul Economiei, Energiei si Mediului de Afaceri
                // Institutii in subordinea Ministerul Transporturilor, Infrastructurii si Comunicatiilor
                // Institutii in subordinea Ministerul Agriculturii si Dezvoltarii Rurale
                // Institutii in subordinea Ministerul Lucrarilor Publice, Dezvoltarii si Administratiei
                // Institutii in subordinea Ministerul Fondurilor Europene
                // Institutii in subordinea Ministerul Sanatatii
                // Institutii in subordinea Ministerul Educatiei si Cercetarii
                // Institutii in subordinea Ministerul Culturii
                // Institutii in subordinea Ministerul Tineretului si Sportului
                // Institutii in subordinea Ministerul Muncii si Protectiei Sociale
            )
        );
    }
}
