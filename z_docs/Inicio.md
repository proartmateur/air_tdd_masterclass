# Temario

Temas tentativos:


*Sesión 1: 90 minutos*

*Introducción:*
¿Qué es TDD?
¿Qué son los test?
¿Cuándo sí y cuando no usarlos? (coverage)
¿Tipos de Test y cuándo usarlos?
¿Qué pasa si mi código no es compatible con los test?




*Test en Laravel*
¿Qué herramientas de test podemos usar con laravel 11+?
PHPUnit para pruebas unitarias
    - Anatomía de una prueba unitaria
    - *Primer ejercicio:* Prueba unitaria con función pura
    - Automatización en la escritura de pruebas con Inteligencia Artificial



*Sesión 2: (90 minutos)*

PHPUnit para pruebas de base de datos
    - ¿Qué son las pruebas de base de datos?
    - RefreshDatabase -> ¿Cuándo NO usar?
    - *Segundo ejercicio:* Prueba de un modelo de Eloquent

## Probando los patrones de Laravel
    *Tercer ejercicio:* Pruebas de Services
    
    -------- Opcional ------------------------
    *Cuarto ejercicio:* Pruebas de Repositories
    *Quinto ejercicio:* Prueba de Events sencillos
    *Sexto ejercicio:* Prueba de Endpoint

# ¿Qué es TDD?

``` sh
 php artisan test --filter test_crear_usuario_manualmente
```

``` sh
 php artisan test .\tests\Feature\UserDbTestV2.php --filter test_crear_usuario_manualmente
```
