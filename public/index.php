<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determina si la aplicación se encuentra en modo mantenimiento...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Registra el cargador automático (autoloader) de Composer según el estándar PSR-4...
require __DIR__.'/../vendor/autoload.php';

// Inicializa el núcleo del framework (bootstrap) y procesa la petición HTTP entrante...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
