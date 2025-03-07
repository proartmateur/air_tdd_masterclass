<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserDbTestV2 extends TestCase
{
    use RefreshDatabase; // Limpia la BD antes de cada test

    public function test_crear_usuario_manualmente()
    {
        // Crear usuario manualmente sin usar Factory
        $user = new User();
        $user->name = "John Doe";
        $user->email = "johndoe@example.com";
        $user->password = bcrypt("password");
        $user->save();

        // Verificar que el usuario existe en la base de datos
        $this->assertDatabaseHas('users', [
            'email' => 'johndoe@example.com'
        ]);

        // Verificar que hay al menos un usuario
        $this->assertTrue(User::count() > 0);
    }
}

