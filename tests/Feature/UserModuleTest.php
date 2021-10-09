<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    public function cargar_lista_usuario(){
        $this->get('usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');    
    }
    /** @test */
    public function crear_nuevo_usuario(){
        $this->get('usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear un usuario');    
    }
    /** @test */
    public function cargar_detalle_usuarios(){
        $this->get('usuarios/1')
            ->assertStatus(200)
            ->assertSee('Ver un solo usuario 1');    
    }
    
    public function test_nuevo_usuario(){
        $this->post('usuarios/nuevo',[
            "name" => "Jose Deodanes",
            "email" => "josedeodanes99@gmail.com",
            "password" => "jose002",
            "profession_id" => 1
        ])->assertSee('Procesando informacion');

        $this->assertDatabaseHas('users',[
            "name" => "Jose Deodanes",
            "email" => "josedeodanes99@gmail.com",
            "password" => "jose002",
            "profession_id" => 1
        ]);
        $this->assertCredentials([
            "name" => "Jose Deodanes",
            "email" => "josedeodanes99@gmail.com",
            "password" => "jose002",
            "profession_id" => 1
        ]);
    }
    /** @test */
    public function campo_name_required(){

        $this->withoutExceptionHandling();

        $this->from('/usuarios/nuevo')->post('/usuarios',[
            'name' => "",
            "email" => "josedeodanes99@gmail.com",
            "password" => "jose123"
        ])->assertRedirect('/usuarios/nuevo')
        ->assertSessionHasErrors(['name' => "El campo nombre es obligatorio"]);

        $this->assertDatabaseMissing('users',[
            "email" => "josedeodanes99@gmail.com"
        ]);
    }
}
