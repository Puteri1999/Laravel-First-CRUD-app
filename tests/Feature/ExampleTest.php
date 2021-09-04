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
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    
    public function patient_can_be_created()
    {
        $response = $this->post('/patient/create',[
            'name'=> 'Test Name',
            'gender'=> 'Male',
        ]);
        $response->assertOk();
        $this->assertDatabaseHas('patient', ['name'=> 'Test Name']);
    }

    public function patient_can_be_listed()
    {
        $response = $this->get('/patient',[
            'name'=> name,
            'gender'=> gender,
        ]);
        $response->assertOk();
        $this->assertCount(1,Patient::all());
    }

    public function patient_can_be_updated()
    {
        $this->post('/patient/update',[
            'name'=> 'Test Name',
            'gender'=> 'Male',
        ]);
        $response->assertOk("200:success");
    }

    public function patient_can_be_deleted()
    {
        $this -> get('/patient/delete')->where('id', $id) ->delete();
        $response->assertOk();
    }
}
