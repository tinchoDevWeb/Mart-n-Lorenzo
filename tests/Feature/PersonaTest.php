<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_alta_sinDatos()
    {
        $response = $this->get('/api/alta');

        $response->assertStatus(400);
    }

    public function test_alta_conDatos()
    {
        $response = $this->post('/api/alta', [
            'nombre' => 'Tincho',
            'apellido' => 'Lorenzo',
            'telefono' => '098388201'
        ]);

        $response->assertStatus(201);
    }
    
    public function test_baja_sinDatos()
    {
        $response = $this->get('/api/baja');

        $response->assertStatus(400);
    }

    public function test_baja_conDatos()
    {
        $response = $this->delete('/api/baja', [
            'id' => 1
        ]);

        $response->assertStatus(204);
    }

    public function test_modificacion_sinDatos()
    {
        $response = $this->get('/api/modificacion');

        $response->assertStatus(400);
    }

    public function test_modificacion_conDatos()
    {
        $response = $this->put('/api/modificacion', [
            'id' => 1,
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'telefono' => '098388205'
        ]);

        $response->assertStatus(200);
    }

    public function test_listado_sinDatos()
    {
        $response = $this->get('/api/listado');

        $response->assertStatus(400);
    }

    public function test_listado_conDatos()
    {
        $response = $this->get('/api/listado', [
            'id' => 1
        ]);

        $response->assertStatus(200);
    }

    public function test_busqueda_sinDatos()
    {
        $response = $this->get('/api/busqueda');

        $response->assertStatus(400);
    }

    public function test_busqueda_conDatos()
    {
        $response = $this->get('/api/busqueda', [
            'nombre' => 'Tincho'
        ]);

        $response->assertStatus(200);
    }
}


