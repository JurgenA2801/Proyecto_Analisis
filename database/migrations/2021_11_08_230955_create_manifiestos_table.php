<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifiestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifiestos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPuertoOrigen');
            $table->foreign('idPuertoOrigen')->references('id')->on('puerto');            
            $table->string('tipo'); 
            $table->dateTime('fecha');
            $table->unsignedBigInteger('idNave');
            $table->foreign('idNave')->references('id')->on('nave'); 
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
        Schema::dropIfExists('manifiestos');
    }
}
