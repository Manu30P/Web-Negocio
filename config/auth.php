<?php

use App\Models\User;

return [

    /*
    |--------------------------------------------------------------------------
    | Valores por Defecto de Autenticación
    |--------------------------------------------------------------------------
    |
    | Esta opción define el "guard" (mecanismo de autenticación) y el "broker"
    | de restablecimiento de contraseña por defecto para tu aplicación.
    | Puedes cambiar estos valores según lo requieras, pero son ideales para la
    | mayoría de las aplicaciones.
    |
    */

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Guards (Guardianes de Autenticación)
    |--------------------------------------------------------------------------
    |
    | Define cada guardián de autenticación de tu aplicación. Un "guard" determina
    | cómo se mantiene el estado de autenticación de los usuarios en cada petición
    | (por ejemplo, mediante sesiones HTTP de PHP o tokens en APIs).
    |
    | Cada guard utiliza un "User Provider" (proveedor de usuarios) para indicar
    | de dónde y cómo se obtienen los registros de la base de datos.
    |
    | Soportados: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers (Proveedores de Usuarios)
    |--------------------------------------------------------------------------
    |
    | Todos los guards de autenticación tienen un proveedor de usuarios, el cual
    | define cómo se recuperan los datos reales de los usuarios desde la base
    | de datos u otro sistema de almacenamiento. Típicamente se usa Eloquent.
    |
    | Si tienes múltiples tablas o modelos de usuarios (ej: 'users' y 'admins'),
    | puedes configurar varios proveedores. Luego podrás asignarlos a otros guards.
    |
    | Soportados: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', User::class),
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Restablecimiento de Contraseñas (Password Resets)
    |--------------------------------------------------------------------------
    |
    | Opciones de configuración para el mecanismo de recuperación de contraseña:
    |
    | - 'table': Tabla donde se almacenan los tokens temporales de recuperación.
    | - 'expire': Minutos durante los cuales el token es válido (caducidad de seguridad).
    | - 'throttle': Segundos que el usuario debe esperar antes de generar un nuevo
    |   token (evita ataques de fuerza bruta / spam de correos).
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tiempo de Espera para Confirmación de Contraseña
    |--------------------------------------------------------------------------
    |
    | Define la cantidad de segundos antes de que expire la ventana de confirmación
    | de contraseña. Cuando caduca, se solicita al usuario reingresar su clave
    | para realizar acciones sensibles. Por defecto son 10.800 segundos (3 horas).
    |
    */

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
