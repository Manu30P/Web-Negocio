<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Disco de Almacenamiento por Defecto (Default Filesystem Disk)
    |--------------------------------------------------------------------------
    |
    | Especifica el disco de almacenamiento predeterminado que utilizará el framework.
    | Laravel abstrae el almacenamiento en discos locales o servicios en la nube (AWS S3).
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Discos de Almacenamiento (Filesystem Disks)
    |--------------------------------------------------------------------------
    |
    | Configura los diferentes discos de almacenamiento disponibles:
    | - 'local': Archivos privados dentro de `storage/app/private`.
    | - 'public': Archivos accesibles públicamente por la web en `storage/app/public`.
    | - 's3': Almacenamiento de objetos en la nube de Amazon Web Services.
    |
    | Drivers soportados: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'serve' => true,
            'throw' => false,
            'report' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => rtrim(env('APP_URL', 'http://localhost'), '/').'/storage',
            'visibility' => 'public',
            'throw' => false,
            'report' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
            'report' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Enlaces Simbólicos (Symbolic Links)
    |--------------------------------------------------------------------------
    |
    | Configuración de los enlaces simbólicos (symlinks) creados al ejecutar
    | `php artisan storage:link`. Conecta `public/storage` con `storage/app/public`
    | para poder servir imágenes y archivos subidos vía web.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
