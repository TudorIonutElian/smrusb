<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateIstoricRegiuni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istoric_regiuni', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('regiune');
            $table->date('data')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('detalii', 100);
            $table->string('denumire_istoric', 100)->nullable();
            $table->integer('tip');

            $table->foreign('regiune')->references('id')->on('regiuni');
        });

        // Setare trigger pentru creare regiuni
        DB::unprepared('
                CREATE TRIGGER after_regiuni_creare
                    AFTER INSERT ON regiuni FOR EACH ROW
                        BEGIN
                            INSERT INTO istoric_regiuni(
                                regiune,
                                detalii,
                                tip,
                                denumire_istoric)
                            VALUES (
                                new.id,
                                "Regiunea a fost creata.",
                                new.stare,
                                new.denumire);
                        END
                ');

        // Setare trigger pentru update regiuni
        DB::unprepared('
                CREATE TRIGGER after_regiuni_update
                    AFTER UPDATE ON regiuni FOR EACH ROW
                        BEGIN
                            IF NEW.STARE = 0 && OLD.STARE = 1 THEN
                                INSERT INTO istoric_regiuni(
                                    regiune,
                                    detalii,
                                    tip,
                                    denumire_istoric)
                                VALUES (
                                    new.id,
                                    "Regiunea a fost suspendata.",
                                    new.stare,
                                    new.denumire);
                            END IF;

                            IF NEW.STARE = 1 && OLD.STARE = 0 THEN
                                INSERT INTO istoric_regiuni(
                                    regiune,
                                    detalii,
                                    tip,
                                    denumire_istoric)
                                VALUES (
                                    new.id,
                                    "Regiunea a fost reactivata.",
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
//        Schema::table('istoric_regiuni', function (Blueprint $table){
//            $table->dropForeign('istoric_regiuni_regiune_foreign');
//        });
        Schema::dropIfExists('istoric_regiuni');
    }
}
