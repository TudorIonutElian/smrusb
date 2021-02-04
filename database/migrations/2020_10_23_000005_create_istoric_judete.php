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
            $table->integer('tip');

            $table->foreign('judet')->references('id')->on('judete')->onDelete('cascade');
        });

        DB::unprepared('
                CREATE TRIGGER after_judete_creare
                    AFTER INSERT ON judete FOR EACH ROW
                        BEGIN
                            INSERT INTO istoric_judete(judet, detalii, tip) VALUES (new.id, "Judetul a fost creat", 1);
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
