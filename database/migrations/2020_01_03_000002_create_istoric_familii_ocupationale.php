<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstoricFamiliiOcupationale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istoric_familii_ocupationale', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('familie');
            $table->date('data')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('detalii', 100);
            $table->string('denumire_istoric', 100)->nullable();
            $table->integer('tip');

            $table->foreign('familie')->references('id')->on('familii_ocupationale');
        });

        // Setare trigger pentru creare judete
        DB::unprepared('
                CREATE TRIGGER after_familii_ocupationale_creare
                    AFTER INSERT ON familii_ocupationale FOR EACH ROW
                        BEGIN
                            INSERT INTO istoric_familii_ocupationale(
                                familie,
                                detalii,
                                tip,
                                denumire_istoric)
                            VALUES (
                                new.id,
                                "Familia ocupationala a fost creata.",
                                new.stare,
                                new.denumire);
                        END
                ');

        // Setare trigger pentru update judet
        DB::unprepared('
                CREATE TRIGGER after_familii_ocupationale_update
                    AFTER UPDATE ON familii_ocupationale FOR EACH ROW
                        BEGIN
                            IF NEW.STARE = 0 && OLD.STARE = 1 THEN
                                INSERT INTO istoric_familii_ocupationale(
                                    familie,
                                    detalii,
                                    tip,
                                    denumire_istoric)
                                VALUES (
                                    new.id,
                                    "Familia Ocupationala a fost suspendata.",
                                    new.stare,
                                    new.denumire);
                            END IF;

                            IF NEW.STARE = 1 && OLD.STARE = 0 THEN
                                INSERT INTO istoric_familii_ocupationale(
                                    familie,
                                    detalii,
                                    tip,
                                    denumire_istoric)
                                VALUES (
                                    new.id,
                                    "Familia Ocupationala a fost reactivata.",
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
        Schema::dropIfExists('istoric_familii_ocupationale');
    }
}
