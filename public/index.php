<?php

declare(strict_types=1);

define('FORJIX_START', microtime(true));

// Register the Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

use Forjix\Core\Application;
use Forjix\Http\Kernel;
use Forjix\Http\Request;
use Forjix\Http\Router;

// Create the application instance
$app = new Application(dirname(__DIR__));

// Load configuration
$app->loadConfigurationFiles();

// Create the HTTP kernel
$router = new Router($app);
$kernel = new Kernel($app, $router);

// Register routes
require $app->basePath('routes/web.php');

// Capture the request
$request = Request::capture();

// Handle the request
$response = $kernel->handle($request);

// Send the response
$response->send();

// Terminate the application
$kernel->terminate($request, $response);
