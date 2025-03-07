<?php

declare(strict_types=1);

function calcular_iva(float $precio, float $iva)
{
    
    if ($precio < 0 || $iva < 0) {
        throw new InvalidArgumentException('Precio e IVA deben ser valores positivos');
    }
    
    return $precio * $iva;
}
