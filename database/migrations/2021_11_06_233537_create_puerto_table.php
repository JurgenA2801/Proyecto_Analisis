<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuertoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puerto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idItinerario');
            $table->foreign('idItinerario')->references('id')->on('itinerario');
            $table->string('nombre'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puerto');
    }
}
