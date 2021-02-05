<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstoricAngajati extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istoric_angajati', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('angajat');
            $table->date('data')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('detalii', 100);
            $table->enum('tip', [1,2,3,4,5,6,7]);

            $table->foreign('angajat')->references('id')->on('angajati');
        });

        // Setare trigger pentru creare angajati
        DB::unprepared('
                CREATE TRIGGER after_angajati_creare
                    AFTER INSERT ON angajati FOR EACH ROW
                        BEGIN
                            INSERT INTO istoric_angajati(
                                angajat,
                                detalii,
                                tip)
                            VALUES (
                                new.id,
                                "Persoana a gost angajata",
                                1);
                        END
                ');

        // Setare trigger pentru update judet
        DB::unprepared('
                CREATE TRIGGER after_angajati_update
                    AFTER UPDATE ON angajati FOR EACH ROW
                        BEGIN
                            IF NEW.STARE = 1 THEN
                                INSERT INTO istoric_angajati(
                                    angajat,
                                    detalii,
                                    tip)
                                VALUES (
                                    new.id,
                                    "Persoana a fost delegata la.",
                                    1);
                            END IF;

                            IF NEW.STARE = 2 THEN
                                INSERT INTO istoric_angajati(
                                    angajat,
                                    detalii,
                                    tip)
                                VALUES (
                                    new.id,
                                    "Persoana a fost detasata la.",
                                    2);
                            END IF;

                            IF NEW.STARE = 3 THEN
                                INSERT INTO istoric_angajati(
                                    angajat,
                                    detalii,
                                    tip)
                                VALUES (
                                    new.id,
                                    "Persoanei a fost suspendata.",
                                    3);
                            END IF;

                            IF NEW.STARE = 4 THEN
                                INSERT INTO istoric_angajati(
                                    angajat,
                                    detalii,
                                    tip)
                                VALUES (
                                    new.id,
                                    "Persoanei a fost imputernicita.",
                                    4);
                            END IF;

                            IF NEW.STARE = 5 THEN
                                INSERT INTO istoric_angajati(
                                    angajat,
                                    detalii,
                                    tip)
                                VALUES (
                                    new.id,
                                    "Persoanei a fost mutata.",
                                    5);
                            END IF;
                        END
                ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('istoric_angajati');
    }
}
