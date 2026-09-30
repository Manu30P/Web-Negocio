<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Servicios de Terceros (Third Party Services)
    |--------------------------------------------------------------------------
    |
    | Este archivo se utiliza para almacenar las credenciales de servicios
    | externos y APIs de terceros (como Postmark, Resend, AWS SES, Slack, etc.).
    | Proporciona una ubicación estandarizada para que los paquetes y la app
    | obtengan las claves de API necesarias desde las variables del entorno (.env).
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
