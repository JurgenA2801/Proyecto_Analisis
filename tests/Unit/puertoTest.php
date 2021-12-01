<?php

namespace Tests\Unit;

use App\Models\puerto;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;
class puertoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {   $puerto = new puerto();
        $this->assertInstanceOf(Collection::class, $puerto->listar());
        $this->assertTrue(true);

        $testpuerto = [
            'idItinerario' => 1,
            'nombre' => "puntarenas"
       
        ];
        $response = $this->post('/puertoGuardar', $testpuerto);
        //Prueba de actualizar
        $puertotest = puerto::find(1);
        $puertotest -> nombre = "liberia"; 
        $this -> assertEquals(true,   $puertotest -> save());
        //Prueba de listar
        
        $response->assertStatus(302);
    }
}
