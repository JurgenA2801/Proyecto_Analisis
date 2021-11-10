<?php

namespace Tests\Unit;

use App\Models\itinerario;
use App\Models\nave;
use App\Models\puerto;
use App\Models\reserva;
use App\Models\tipoServicio;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $nave = new nave(); 
        $itinerario = new itinerario();
        $puerto = new puerto();
        $reserva = new reserva();
        $tipoServ = new tipoServicio();
        

        $this->assertInstanceOf(Collection::class, $itinerario->listar());
        $this->assertInstanceOf(Collection::class, $nave->listar());
        $this->assertInstanceOf(Collection::class, $puerto->listar());
        $this->assertInstanceOf(Collection::class, $reserva->listar());
        $this->assertInstanceOf(Collection::class, $tipoServ->listar());

    }
}
