<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Conexión por Defecto del Sistema de Colas (Queue)
    |--------------------------------------------------------------------------
    |
    | El sistema de colas de Laravel permite diferir tareas pesadas (como enviar
    | correos, procesar imágenes o generar archivos) para su ejecución en segundo plano.
    | Esta opción define el driver predeterminado asignado en `QUEUE_CONNECTION`.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Conexiones de Colas Configuradas
    |--------------------------------------------------------------------------
    |
    | Aquí se definen y configuran los parámetros de conexión para cada motor de
    | colas disponible en la aplicación.
    |
    | - 'sync': Ejecuta la tarea inmediatamente en el hilo principal (modo síncrono).
    | - 'database': Guarda las tareas pendientes en la tabla 'jobs' de la base de datos.
    | - 'redis' / 'sqs': Drivers de colas asíncronas de alto rendimiento.
    |
    | Drivers soportados: "sync", "database", "beanstalkd", "sqs", "redis",
    |                    "deferred", "background", "failover", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'connection' => env('DB_QUEUE_CONNECTION'),
            'table' => env('DB_QUEUE_TABLE', 'jobs'),
            'queue' => env('DB_QUEUE', 'default'),
            'retry_after' => (int) env('DB_QUEUE_RETRY_AFTER', 90),
            'after_commit' => false,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => env('BEANSTALKD_QUEUE_HOST', 'localhost'),
            'queue' => env('BEANSTALKD_QUEUE', 'default'),
            'retry_after' => (int) env('BEANSTALKD_QUEUE_RETRY_AFTER', 90),
            'block_for' => 0,
            'after_commit' => false,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_QUEUE_CONNECTION', 'default'),
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => (int) env('REDIS_QUEUE_RETRY_AFTER', 90),
            'block_for' => null,
            'after_commit' => false,
        ],

        'deferred' => [
            'driver' => 'deferred',
        ],

        'background' => [
            'driver' => 'background',
        ],

        'failover' => [
            'driver' => 'failover',
            'connections' => [
                'database',
                'deferred',
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Lotes de Trabajos (Job Batching)
    |--------------------------------------------------------------------------
    |
    | Opciones para configurar la base de datos y la tabla ('job_batches') que
    | rastrean la ejecución agrupada de lotes de trabajos en segundo plano.
    |
    */

    'batching' => [
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'job_batches',
    ],

    /*
    |--------------------------------------------------------------------------
    | Trabajos Fallidos en Cola (Failed Queue Jobs)
    |--------------------------------------------------------------------------
    |
    | Configuración del registro de tareas en cola que han fallado al ejecutarse
    | tras agotar sus reintentos. Permite almacenarlas en la tabla 'failed_jobs'
    | para inspeccionarlas o reintentarlas más tarde con comandos Artisan.
    |
    | Drivers soportados: "database-uuids", "dynamodb", "file", "null"
    |
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'failed_jobs',
    ],

];
