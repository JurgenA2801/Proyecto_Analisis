<?php

namespace Tests\Unit;
use App\Models\reserva;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

class ReservaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    //Prueba de crear
    public function test_example()
    {
        $testReserva = [
            'idNave' => 1,
            'idTipoReserva'=> 1,
            'precio'=> 3800,
            'estado'=> 0
                  
        ];
        
        $response = $this->post('/reservaGuardar', $testReserva);
        $response->assertStatus(302);

        //Prueba de actualizar
        $reservaTest = reserva::find(1);
        $reservaTest -> precio = 6500; 
        $this -> assertEquals(true,   $reservaTest -> save());


        $reserva = new reserva();
        $this->assertInstanceOf(Collection::class, $reserva->listar());
    }
}
