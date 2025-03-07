# Automatizar la escritura de test con Inteligencia Artificial (IA)

## Desde el editor o IDE

Para poder escribir rápidamente pruebas unitarias para nuestras funciones o helpers es posible utilizar la extensión(VSCode) o el plugin(PHP Storm) de microsoft copilot.

1- Abrir el chat dentro dentro del IDE
2- Posicionar el cursor en el código del archivo que queremos probar
3- Verificar en el campo de texto del chat que el archivo seleccionado es parte del contexto
4- Redactar nuestro prompt

Con el método abreviado */setupTests* podemos indicar a copilot que deseamos crear un archivo de test desde cero. Seguido de un espacio vamos a redactar nuestro prompt.


### Prompt 1 (rápido pero poco preciso):

I need a unit test for my function [function] where $precio and $iva are positive float numbers.

Organize test with the AAA structure.

Please analyze the function's implementation code to understand its logic and write both happy and bad paths.

[function] = calcular_iva(float $precio, float $iva)


### Prompt 2 (mayor precisión)
/setupTests 
Please act like a software engineer expert in Laravel 11 and help me writing a PHPUnit unit test for my function [function], where $precio and $iva are positive float numbers.

1. Analyze the function's implementation to understand its logic and edge cases.
2. Generate test cases covering both happy and bad paths.
3. Structure the test using the Arrange-Act-Assert (AAA) pattern and write comments in each A part.
4. Ensure each test case includes meaningful assertions with correctly calculated expected values.

[function] = function calcular_iva(float $precio, float $iva)
{
    
    if ($precio < 0 || $iva < 0) {
        throw new InvalidArgumentException('Precio e IVA deben ser valores positivos');
    }
    
    return $precio * $iva;
}
