<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItinerarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itinerario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idNave')->nullable();
            $table->foreign('idNave')->references('id')->on('nave');
            $table->Datetime('fechaInicio');
            $table->Datetime('fechaFinal');
            $table-> timestamps();
           


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itinerario');
    }
}
