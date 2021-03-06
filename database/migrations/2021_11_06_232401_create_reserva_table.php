<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idNave');
            $table->foreign('idNave')->references('id')->on('nave');
            $table->unsignedBigInteger('idTipoReserva');
            $table->foreign('idTipoReserva')->references('id')->on('tipo_reserva');
            $table->double('precio'); 
            $table -> boolean('estado'); //1=pagado, 0=reservado pero no pagado
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
        Schema::dropIfExists('reserva');
    }
}
