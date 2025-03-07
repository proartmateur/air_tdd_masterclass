<?php

use PHPUnit\Framework\TestCase;

class CalcularIvaTestByCopilot extends TestCase
{
    public function testCalcularIvaHappyPath()
    {
        // Arrange
        $precio = 100.0;
        $iva = 0.21;
        $expected = 21.0;

        // Act
        $result = calcular_iva($precio, $iva);

        // Assert
        $this->assertEquals($expected, $result);
    }

    public function testCalcularIvaZeroPrecio()
    {
        // Arrange
        $precio = 0.0;
        $iva = 0.21;
        $expected = 0.0;

        // Act
        $result = calcular_iva($precio, $iva);

        // Assert
        $this->assertEquals($expected, $result);
    }

}