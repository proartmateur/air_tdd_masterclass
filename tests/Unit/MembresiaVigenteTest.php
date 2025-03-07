<?php

use PHPUnit\Framework\TestCase;
use Carbon\Carbon;

class MembresiaVigenteTest extends TestCase
{
    public function testMembresiaVigenteWithValidExpirationDate()
    {
        // Arrange
        $fechaExpiracion = Carbon::now()->addDays(10);
        $fechaActual = Carbon::now();

        // Act
        $resultado = membresiaVigente($fechaExpiracion, $fechaActual);

        // Assert
        $this->assertTrue($resultado);
    }

    public function testMembresiaVigenteWithExpiredDate()
    {
        // Arrange
        $fechaExpiracion = Carbon::now()->subDays(1);
        $fechaActual = Carbon::now();

        // Act
        $resultado = membresiaVigente($fechaExpiracion, $fechaActual);

        // Assert
        $this->assertFalse($resultado);
    }

    public function testMembresiaVigenteWithTodayAsExpirationDate()
    {
        // Arrange
        $fechaExpiracion = Carbon::now();
        $fechaActual = Carbon::now();

        // Act
        $resultado = membresiaVigente($fechaExpiracion, $fechaActual);

        // Assert
        $this->assertFalse($resultado);
    }

    public function testMembresiaVigenteWithStringDate()
    {
        // Arrange
        $fechaExpiracion = '2025-12-31';
        $fechaActual = Carbon::now();

        // Act
        $resultado = membresiaVigente($fechaExpiracion, $fechaActual);

        // Assert
        $this->assertTrue($resultado);
    }

    public function testMembresiaVigenteWithNullCurrentDate()
    {
        // Arrange
        $fechaExpiracion = Carbon::now()->addDays(5);

        // Act
        $resultado = membresiaVigente($fechaExpiracion);

        // Assert
        $this->assertTrue($resultado);
    }
}