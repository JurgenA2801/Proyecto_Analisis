<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;
use App\Models\nave;

class naveTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    //Prueba de crear
    {   $nave = new nave(); 
        $this->assertInstanceOf(Collection::class, $nave->listar());
        $this->assertTrue(true);

        $testnave = [
            'capacidadCarga' => 10,
            'capacidadPasajeros' => 10
       
        ];
        $response = $this->post('/naveGuardar', $testnave);
        //Prueba de actualizar
        $navetest = nave::find(1);
        $navetest -> capacidadCarga = 12; 
        $this -> assertEquals(true,   $navetest -> save());
        //Prueba de listar
        
        $response->assertStatus(302);

    }
}
