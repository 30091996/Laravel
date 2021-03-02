<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePorudzbinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porudzbinas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ime_prezime');
            $table->string('email');
            $table->string('adresa');
            $table->string('broj_telefona');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('porudzbinas');
    }
}
