<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;
use App\Models\itinerario;

class itinerarioTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        
       //Prueba de crear
       
      $testItinerario = [
            'idNave' => 1,
            'fechaInicio' => "2021-12-20 10:00:00",
            'fechaFinal' =>  "2021-12-21 10:00:00" 
       
      ]; 

      
        
      // $response = $this->post('/itinerarioGuardar', $testItinerario);
      // $response->assertStatus(302);

        //Prueba de actualizar
        $itinerarioTest = itinerario::find(1);
        $itinerarioTest -> fechaInicio = "2021-12-1 16:30:00"; 
        $this -> assertEquals(true,   $itinerarioTest -> save());


        //Prueba de listar
        $itinerario = new itinerario();
        $this->assertInstanceOf(Collection::class, $itinerario->listar());
        
    }
}
