<?php

use Forjix\Http\Router;
use App\Controllers\HomeController;

/** @var Router $router */

// Register controllers with attribute-based routing
$router->registerController(HomeController::class);
