<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (\Throwable $e, $request) {
            echo "<h1>LARAVEL ROOT ERROR:</h1>";
            echo "<pre>URI: " . $request->getRequestUri() . "</pre>";
            echo "<pre>" . $e->getMessage() . "</pre>";
            echo "<pre>" . $e->getFile() . ":" . $e->getLine() . "</pre>";
            echo "<pre>" . $e->getTraceAsString() . "</pre>";
            exit;
        });
    })->create();

if (isset($_ENV['VERCEL_STORAGE']) || isset($_SERVER['VERCEL_STORAGE'])) {
    $app->useStoragePath('/tmp/storage');
}

return $app;
