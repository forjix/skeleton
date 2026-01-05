<?php

return [
    'name' => env('APP_NAME', 'Forjix'),
    'env' => env('APP_ENV', 'production'),
    'debug' => env('APP_DEBUG', false),
    'url' => env('APP_URL', 'http://localhost'),
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => env('APP_KEY'),

    'providers' => [
        // Core Service Providers
        // App\Providers\AppServiceProvider::class,
        // App\Providers\RouteServiceProvider::class,
    ],

    'aliases' => [
        // Add class aliases here
    ],
];
