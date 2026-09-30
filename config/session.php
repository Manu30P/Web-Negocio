<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Driver de Sesión por Defecto (Default Session Driver)
    |--------------------------------------------------------------------------
    |
    | Define el driver que se utilizará para almacenar la información de las
    | sesiones de los usuarios en cada petición HTTP.
    |
    | Soportados: "file", "cookie", "database", "memcached",
    |            "redis", "dynamodb", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Tiempo de Vida de la Sesión (Session Lifetime)
    |--------------------------------------------------------------------------
    |
    | Especifica la cantidad de minutos de inactividad permitidos antes de que
    | la sesión expire. `expire_on_close` hace que la sesión caduque inmediatamente
    | al cerrar la ventana o pestaña del navegador.
    |
    */

    'lifetime' => (int) env('SESSION_LIFETIME', 120),

    'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false),

    /*
    |--------------------------------------------------------------------------
    | Encriptación de Sesión (Session Encryption)
    |--------------------------------------------------------------------------
    |
    | Permite cifrar automáticamente todos los datos almacenados en la sesión.
    | Laravel realiza la encriptación/desencriptación de forma transparente.
    |
    */

    'encrypt' => env('SESSION_ENCRYPT', false),

    /*
    |--------------------------------------------------------------------------
    | Ubicación de Archivos de Sesión (Session File Location)
    |--------------------------------------------------------------------------
    |
    | Cuando se utiliza el driver "file", especifica el directorio en disco donde
    | se guardan los archivos físicos con los datos de cada sesión.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Conexión a Base de Datos para Sesiones
    |--------------------------------------------------------------------------
    |
    | Cuando se emplean los drivers "database" o "redis", especifica la conexión a
    | base de datos concreta que gestionará la tabla de sesiones.
    |
    */

    'connection' => env('SESSION_CONNECTION'),

    /*
    |--------------------------------------------------------------------------
    | Tabla de Sesiones en Base de Datos
    |--------------------------------------------------------------------------
    |
    | Cuando se usa el driver "database", especifica el nombre de la tabla SQL
    | encargada de almacenar las sesiones activas (por defecto 'sessions').
    |
    */

    'table' => env('SESSION_TABLE', 'sessions'),

    /*
    |--------------------------------------------------------------------------
    | Almacén de Caché para Sesiones
    |--------------------------------------------------------------------------
    |
    | Cuando se usan almacenes de caché como backend de sesión (ej. Redis o Memcached),
    | indica qué store de caché configurado se utilizará.
    |
    | Afecta a: "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE'),

    /*
    |--------------------------------------------------------------------------
    | Lotería de Limpieza de Sesiones (Session Sweeping Lottery)
    |--------------------------------------------------------------------------
    |
    | Probabilidad porcentual de que en una petición HTTP se ejecute la recolección
    | de basura (garbage collection) para purgar sesiones antiguas/caducadas.
    | Por defecto, hay 2 posibilidades entre 100 (2%).
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Nombre de la Cookie de Sesión
    |--------------------------------------------------------------------------
    |
    | Define el nombre de la cookie enviada al navegador del cliente que almacena
    | el ID único de sesión.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug((string) env('APP_NAME', 'laravel')).'-session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Ruta de la Cookie de Sesión (Session Cookie Path)
    |--------------------------------------------------------------------------
    |
    | Define la ruta (URL path) para la cual la cookie de sesión estará disponible.
    | Por defecto es la raíz ('/').
    |
    */

    'path' => env('SESSION_PATH', '/'),

    /*
    |--------------------------------------------------------------------------
    | Dominio de la Cookie de Sesión
    |--------------------------------------------------------------------------
    |
    | Determina a qué dominio y subdominios enviará el navegador la cookie de sesión.
    |
    */

    'domain' => env('SESSION_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Cookies Solo HTTPS (Secure Cookies)
    |--------------------------------------------------------------------------
    |
    | Si se establece en true, el navegador solo enviará la cookie de sesión de vuelta
    | al servidor sobre conexiones seguras con certificado SSL/TLS (HTTPS).
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | Acceso Solo HTTP (HttpOnly Cookies)
    |--------------------------------------------------------------------------
    |
    | Al activarse (true), impide que scripts de cliente (JavaScript/DOM) accedan a
    | la cookie de sesión, mitigando ataques de Cross-Site Scripting (XSS).
    |
    */

    'http_only' => env('SESSION_HTTP_ONLY', true),

    /*
    |--------------------------------------------------------------------------
    | Atributo Same-Site en Cookies
    |--------------------------------------------------------------------------
    |
    | Controla cómo se comporta la cookie ante peticiones entre diferentes dominios
    | (cross-site), sirviendo como protección contra ataques Cross-Site Request Forgery (CSRF).
    |
    | Soportados: "lax", "strict", "none", null
    |
    */

    'same_site' => env('SESSION_SAME_SITE', 'lax'),

    /*
    |--------------------------------------------------------------------------
    | Cookies Particionadas (Partitioned Cookies)
    |--------------------------------------------------------------------------
    |
    | Asocia la cookie al sitio de nivel superior en contextos entre sitios.
    | Aceptado por navegadores modernos cuando la cookie es "secure" y Same-Site es "none".
    |
    */

    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),

    /*
    |--------------------------------------------------------------------------
    | Serialización de la Sesión
    |--------------------------------------------------------------------------
    |
    | Controla la estrategia de serialización de los datos almacenados en sesión.
    | Por defecto usa "json". La opción "php" permite objetos pero puede acarrear
    | vulnerabilidades de inyección si la clave APP_KEY fuera expuesta.
    |
    | Soportados: "json", "php"
    |
    */

    'serialization' => 'json',

];
