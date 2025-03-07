<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserDbTest extends TestCase
{
    use RefreshDatabase; // Resetea la BD antes de cada test

    public function test_exists_one_or_more_users(): void
    {
        // Patrón AAA

        // Arrange (Preparar)
        // Crear un usuario si la BD está vacía
        if (User::count() == 0) {
            User::factory()->create();
        }
        // Act (Actuar)
        $cantidad_de_usuarios = User::count();
        
        // Assert (Afirmar)
        fwrite(STDERR, "Usuarios en BD: " . User::count() . "\n");
        $this->assertTrue($cantidad_de_usuarios > 0);
    }
}
