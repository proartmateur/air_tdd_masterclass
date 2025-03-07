<?php

use PHPUnit\Framework\TestCase;

class CalcularIvaTestByClaudeSonnet37 extends TestCase
{
    /**
     * Test the happy path with standard values.
     */
    public function testCalcularIvaWithStandardValues(): void
    {
        // Arrange
        $precio = 100.0;
        $iva = 0.21; // 21% tax rate
        $expectedResult = 21.0;
        
        // Act
        $result = calcular_iva($precio, $iva);
        
        // Assert
        $this->assertEquals($expectedResult, $result, 'IVA calculation should match expected value');
    }
    
    /**
     * Test with very small values to ensure precision.
     */
    public function testCalcularIvaWithSmallValues(): void
    {
        // Arrange
        $precio = 0.01;
        $iva = 0.04; // 4% tax rate
        $expectedResult = 0.0004;
        
        // Act
        $result = calcular_iva($precio, $iva);
        
        // Assert
        $this->assertEquals($expectedResult, $result, 'IVA calculation should handle small values correctly');
    }
    
    /**
     * Test with large values.
     */
    public function testCalcularIvaWithLargeValues(): void
    {
        // Arrange
        $precio = 9999.99;
        $iva = 0.16; // 16% tax rate
        $expectedResult = 1599.9984;
        
        // Act
        $result = calcular_iva($precio, $iva);
        
        // Assert
        $this->assertEquals($expectedResult, $result, 'IVA calculation should handle large values correctly');
    }
    
    /**
     * Test with zero tax rate.
     */
    public function testCalcularIvaWithZeroTax(): void
    {
        // Arrange
        $precio = 500.0;
        $iva = 0.0; // 0% tax rate
        $expectedResult = 0.0;
        
        // Act
        $result = calcular_iva($precio, $iva);
        
        // Assert
        $this->assertEquals($expectedResult, $result, 'IVA calculation with zero tax should return zero');
    }
    
    /**
     * Test with different precision values.
     */
    public function testCalcularIvaWithPrecisionValues(): void
    {
        // Arrange
        $precio = 123.45;
        $iva = 0.105; // 10.5% tax rate
        $expectedResult = 12.96225;
        
        // Act
        $result = calcular_iva($precio, $iva);
        
        // Assert
        $this->assertEquals($expectedResult, $result, 'IVA calculation should handle precision values correctly');
    }
    
    /**
     * Test for floating point precision issues.
     */
    public function testFloatingPointPrecision(): void
    {
        // Arrange
        $precio = 33.33;
        $iva = 0.21; // 21% tax rate
        $expectedResult = 6.9993;
        
        // Act
        $result = calcular_iva($precio, $iva);
        
        // Assert
        $this->assertEqualsWithDelta($expectedResult, $result, 0.0001, 'IVA calculation should handle floating point precision correctly');
    }
    
    /**
     * Test with non-numeric string input (should fail).
     */
    public function testNonNumericInput(): void
    {
        // We expect some kind of error when passing a non-numeric string
        $this->expectException(\TypeError::class);
        
        // Act (this should throw an exception)
        calcular_iva("not a number", 0.21);
    }
}