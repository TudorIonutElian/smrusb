<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstoricLocalitati extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istoric_localitati', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('localitate');
            $table->date('data')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('detalii', 100);
            $table->string('denumire_istoric', 100)->nullable();
            $table->integer('tip');

            $table->foreign('localitate')->references('id')->on('localitati');
        });

        // Setare trigger pentru creare localitati
        DB::unprepared('
                CREATE TRIGGER after_localitati_creare
                    AFTER INSERT ON localitati FOR EACH ROW
                        BEGIN
                            INSERT INTO istoric_localitati(
                                localitate,
                                detalii,
                                tip,
                                denumire_istoric)
                            VALUES (
                                new.id,
                                "Localitatea a fost creata.",
                                new.stare,
                                new.denumire);
                        END
                ');

        // Setare trigger pentru update judet
        DB::unprepared('
                CREATE TRIGGER after_localitati_update
                    AFTER UPDATE ON localitati FOR EACH ROW
                        BEGIN
                            IF NEW.STARE = 0 && OLD.STARE = 1 THEN
                                INSERT INTO istoric_localitati(
                                    localitate,
                                    detalii,
                                    tip,
                                    denumire_istoric)
                                VALUES (
                                    new.id,
                                    "Localitatea a fost suspendata.",
                                    new.stare,
                                    new.denumire);
                            END IF;

                            IF NEW.STARE = 1 && OLD.STARE = 0 THEN
                                INSERT INTO istoric_localitati(
                                    localitate,
                                    detalii,
                                    tip,
                                    denumire_istoric)
                                VALUES (
                                    new.id,
                                    "Localitatea a fost reactivata.",
                                    new.stare,
                                    new.denumire);
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
        Schema::dropIfExists('istoric_localitati');
    }
}
