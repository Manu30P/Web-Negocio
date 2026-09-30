<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enviador de Correo por Defecto (Default Mailer)
    |--------------------------------------------------------------------------
    |
    | Esta opción controla el enviador (mailer) predeterminado que se utiliza
    | para enviar todos los correos electrónicos, a menos que se especifique otro
    | explícitamente en el código.
    |
    */

    'default' => env('MAIL_MAILER', 'log'),

    /*
    |--------------------------------------------------------------------------
    | Configuración de Mailers (Transportes de Correo)
    |--------------------------------------------------------------------------
    |
    | Aquí se configuran todos los "mailers" utilizados por la aplicación junto con
    | sus respectivos parámetros de conexión.
    |
    | Laravel soporta múltiples controladores de transporte de e-mail:
    | - 'smtp': Servidor SMTP estándar (Mailtrap, Gmail, Mailgun, etc.).
    | - 'log': Escribe los e-mails enviados en `storage/logs/laravel.log` (ideal para desarrollo).
    | - 'array': Guarda los e-mails en memoria (para pruebas unitarias/Pest).
    | - 'failover' / 'roundrobin': Estrategias de tolerancia a fallos y balanceo.
    |
    | Soportados: "smtp", "sendmail", "mailgun", "ses", "ses-v2",
    |            "postmark", "resend", "log", "array",
    |            "failover", "roundrobin"
    |
    */

    'mailers' => [

        'smtp' => [
            'transport' => 'smtp',
            'scheme' => env('MAIL_SCHEME'),
            'url' => env('MAIL_URL'),
            'host' => env('MAIL_HOST', '127.0.0.1'),
            'port' => env('MAIL_PORT', 2525),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url((string) env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'message_stream_id' => env('POSTMARK_MESSAGE_STREAM_ID'),
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'resend' => [
            'transport' => 'resend',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
            'retry_after' => 60,
        ],

        'roundrobin' => [
            'transport' => 'roundrobin',
            'mailers' => [
                'ses',
                'postmark',
            ],
            'retry_after' => 60,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Dirección de Remitente Global ("From" Address)
    |--------------------------------------------------------------------------
    |
    | Especifica la dirección de correo electrónico y el nombre de remitente por
    | defecto que se emplearán en todos los e-mails salientes enviados por la app.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', env('APP_NAME', 'Laravel')),
    ],

];
