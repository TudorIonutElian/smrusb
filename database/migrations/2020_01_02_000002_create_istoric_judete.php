<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstoricJudete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istoric_judete', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('judet');
            $table->date('data')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('detalii', 100);
            $table->string('denumire_istoric', 100)->nullable();
            $table->integer('tip');

            $table->foreign('judet')->references('id')->on('judete');
        });

        // Setare trigger pentru creare judete
        DB::unprepared('
                CREATE TRIGGER after_judete_creare
                    AFTER INSERT ON judete FOR EACH ROW
                        BEGIN
                            INSERT INTO istoric_judete(
                                judet,
                                detalii,
                                tip,
                                denumire_istoric)
                            VALUES (
                                new.id,
                                "Judetul a fost creat.",
                                new.stare,
                                new.denumire);
                        END
                ');

        // Setare trigger pentru update judet
        DB::unprepared('
                CREATE TRIGGER after_judete_update
                    AFTER UPDATE ON judete FOR EACH ROW
                        BEGIN
                            IF NEW.STARE = 0 && OLD.STARE = 1 THEN
                                INSERT INTO istoric_judete(
                                    judet,
                                    detalii,
                                    tip,
                                    denumire_istoric)
                                VALUES (
                                    new.id,
                                    "Judetul a fost suspendat.",
                                    new.stare,
                                    new.denumire);
                            END IF;

                            IF NEW.STARE = 1 && OLD.STARE = 0 THEN
                                INSERT INTO istoric_judete(
                                    judet,
                                    detalii,
                                    tip,
                                    denumire_istoric)
                                VALUES (
                                    new.id,
                                    "Judetul a fost reactivat.",
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
        Schema::dropIfExists('istoric_judete');
    }
}
