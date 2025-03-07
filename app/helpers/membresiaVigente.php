<?php

use Carbon\Carbon;

if (!function_exists('membresiaVigente')) {
    /**
     * Verifica si una membresía está vigente o ha expirado.
     *
     * @param Carbon|string $fechaExpiracion Fecha en formato Carbon o string (Y-m-d)
     * @param Carbon|string|null $fechaActual Fecha a comparar (por defecto, hoy)
     * @return bool Retorna true si la membresía está vigente, false si expiró
     */
    function membresiaVigente(Carbon|string $fechaExpiracion, Carbon|string|null $fechaActual = null): bool
    {
        // Convertir las fechas a objetos Carbon
        $fechaExpiracion = is_string($fechaExpiracion) ? Carbon::parse($fechaExpiracion) : $fechaExpiracion;
        $fechaActual = $fechaActual ? (is_string($fechaActual) ? Carbon::parse($fechaActual) : $fechaActual) : Carbon::now();

        // Retorna true si la membresía no ha expirado
        return $fechaActual->lessThanOrEqualTo($fechaExpiracion);
    }
}
