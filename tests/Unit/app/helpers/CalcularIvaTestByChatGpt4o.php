<?php

use PHPUnit\Framework\TestCase;

class CalcularIvaTestByChatGpt4o extends TestCase
{
    /**
     * Test calcular_iva with valid positive float values.
     */
    public function testCalcularIvaWithValidValues()
    {
        // Arrange: Define input values and expected output
        $precio = 100.0;
        $iva = 0.16;
        $expected = 100.0 * 0.16;
        
        // Act: Call the function
        $result = calcular_iva($precio, $iva);
        
        // Assert: Verify the output matches the expected result
        $this->assertEquals($expected, $result, "IVA calculation failed with valid values.");
    }

    /**
     * Test calcular_iva when precio is zero.
     */
    public function testCalcularIvaWithZeroPrecio()
    {
        // Arrange
        $precio = 0.0;
        $iva = 0.16;
        $expected = 0.0;
        
        // Act
        $result = calcular_iva($precio, $iva);
        
        // Assert
        $this->assertEquals($expected, $result, "IVA calculation failed when precio is zero.");
    }

    /**
     * Test calcular_iva when IVA is zero.
     */
    public function testCalcularIvaWithZeroIva()
    {
        // Arrange
        $precio = 100.0;
        $iva = 0.0;
        $expected = 0.0;
        
        // Act
        $result = calcular_iva($precio, $iva);
        
        // Assert
        $this->assertEquals($expected, $result, "IVA calculation failed when IVA is zero.");
    }

    /**
     * Test calcular_iva with small decimal values.
     */
    public function testCalcularIvaWithSmallDecimalValues()
    {
        // Arrange
        $precio = 0.99;
        $iva = 0.08;
        $expected = round(0.99 * 0.08, 2);
        
        // Act
        $result = round(calcular_iva($precio, $iva), 2);
        
        // Assert
        $this->assertEquals($expected, $result, "IVA calculation failed with small decimal values.");
    }

    /**
     * Test calcular_iva with large float values to check for precision errors.
     */
    public function testCalcularIvaWithLargeValues()
    {
        // Arrange
        $precio = 1000000.99;
        $iva = 0.21;
        $expected = 1000000.99 * 0.21;
        
        // Act
        $result = calcular_iva($precio, $iva);
        
        // Assert
        $this->assertEquals($expected, $result, "IVA calculation failed with large float values.");
    }
}
