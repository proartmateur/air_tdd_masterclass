<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

function sum(int $a, int $b): int
{
    return $a + $b;
}

class ExampleTest extends TestCase
{

    public function test_pure_function(): void
    {   

        // Patrón AAA

        // Arrange (Preparar)
        $a = 1;
        $b = 2;
        
        // Act (Actuar)
        $result = sum($a, $b);

        // Assert (Afirmar)
        $expected = 3;
        
        $this->assertEquals($expected, $result);
    }
}
