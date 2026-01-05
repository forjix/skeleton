<?php

declare(strict_types=1);

namespace App\Controllers;

use Forjix\Http\Attributes\Controller;
use Forjix\Http\Attributes\Get;
use Forjix\Http\Request;
use Forjix\Http\Response;

#[Controller]
class HomeController
{
    #[Get('/')]
    public function index(Request $request): Response
    {
        return new Response($this->getWelcomeHtml());
    }

    private function getWelcomeHtml(): string
    {
        return <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Forjix</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            text-align: center;
            color: white;
            padding: 2rem;
        }
        h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }
        p {
            font-size: 1.5rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }
        .links {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        a {
            color: white;
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            border: 2px solid white;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        a:hover {
            background: white;
            color: #667eea;
        }
        .version {
            margin-top: 3rem;
            opacity: 0.7;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Forjix</h1>
        <p>A lightweight, modular PHP framework</p>
        <div class="links">
            <a href="https://github.com/forjix/forjix">Documentation</a>
            <a href="https://github.com/forjix/forjix">GitHub</a>
        </div>
        <p class="version">PHP <?= PHP_VERSION ?></p>
    </div>
</body>
</html>
HTML;
    }
}
