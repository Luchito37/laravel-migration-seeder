<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("Azienda", 20);
            $table->string("Stazione di Partenza", 25);
            $table->string("Stazione di arrivo", 25);
            $table->time("Orario di partenza", 25);
            $table->time("Orario di Partenza", 25);
            $table->tinyInteger("Codice treno", 7);
            $table->boolean("in orario");
            $table->boolean("cancellato");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
