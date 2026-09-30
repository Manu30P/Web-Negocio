<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nombre de la Aplicación
    |--------------------------------------------------------------------------
    |
    | Este valor es el nombre de tu aplicación. Se utiliza cuando el framework
    | necesita mostrar el nombre del proyecto en notificaciones o elementos de UI.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Entorno de la Aplicación (Environment)
    |--------------------------------------------------------------------------
    |
    | Determina el entorno en el que se ejecuta la app ('local', 'production', etc.).
    | Permite ajustar configuraciones según estés desarrollando en tu máquina o
    | desplegado en un servidor real. Se configura mediante la variable APP_ENV en .env.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Modo Depuración (Debug Mode)
    |--------------------------------------------------------------------------
    |
    | En modo debug (true), se muestran mensajes de error detallados y el stack trace
    | ante cualquier fallo. En producción DEBE ser false para no exponer datos sensibles.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL de la Aplicación
    |--------------------------------------------------------------------------
    |
    | URL base utilizada por la consola de comandos de Artisan para generar enlaces
    | absolutos correctamente fuera del contexto de peticiones HTTP web.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Zona Horaria (Timezone)
    |--------------------------------------------------------------------------
    |
    | Define la zona horaria por defecto para las funciones de fecha de PHP/Laravel.
    | Por defecto es 'UTC', recomendada para evitar problemas al guardar timestamps en BD.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Configuración de Idioma / Localización
    |--------------------------------------------------------------------------
    |
    | Idioma predeterminado utilizado por los métodos de traducción e internacionalización
    | de Laravel.
    |
    */

    'locale' => env('APP_LOCALE', 'es'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'es_ES'),

    /*
    |--------------------------------------------------------------------------
    | Clave de Cifrado (Encryption Key)
    |--------------------------------------------------------------------------
    |
    | Esta clave es utilizada por los servicios de encriptación de Laravel (ej: cookies,
    | contraseñas, tokens). Debe ser una cadena aleatoria de 32 caracteres generada con
    | `php artisan key:generate`.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', (string) env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Driver del Modo Mantenimiento
    |--------------------------------------------------------------------------
    |
    | Configura el driver utilizado para gestionar el estado de "modo mantenimiento"
    | de Laravel (cuando ejecutas `php artisan down`).
    |
    | Drivers soportados: "file", "cache", "array"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];
