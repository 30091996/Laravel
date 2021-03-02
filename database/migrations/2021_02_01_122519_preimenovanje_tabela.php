<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PreimenovanjeTabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename("proizvods", "proizvod");
        Schema::rename("porudzbinas", "porudzbina");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename("proizvod", "proizvods");
        Schema::rename("porudzbina", "porudzbinas");
    }
}
