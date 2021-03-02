<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DodavanjeKolonaToPorudzbina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('porudzbina', function (Blueprint $table) {
            $table->integer('broj_porucenih_proizvoda');
            $table->unsignedBigInteger('proizvod_id');
            $table->foreign('proizvod_id')->references('id')->on('proizvod')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('porudzbina', function (Blueprint $table) {
            $table->dropForeign('porudzbina_proizvod_id_foreign');
        });
    }
}
