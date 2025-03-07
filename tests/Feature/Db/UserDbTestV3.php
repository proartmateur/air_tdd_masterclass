<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class UserDbTestV3 extends TestCase
{
    public function test_usuario_existe_en_base_de_datos()
    {
        // Obtener un usuario existente (asumiendo que ya tienes usuarios en la BD)
        $user = User::first();

        // Verificar que hay al menos un usuario en la base de datos
        $this->assertNotNull($user, "No se encontró ningún usuario en la base de datos.");

        // Imprimir el usuario en la consola
        dump($user);
    }
}
