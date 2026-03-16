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
        $middleware->trustProxies(at: '*');
        $middleware->validateCsrfTokens(except: [
            '/analyze'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (\Throwable $e) {
            echo "<h1>LARAVEL DIAGNOSTIC ERROR:</h1>";
            echo "<p><strong>Message:</strong> " . $e->getMessage() . "</p>";
            echo "<p><strong>File:</strong> " . $e->getFile() . " on line " . $e->getLine() . "</p>";
            echo "<h3>Stack Trace:</h3>";
            echo "<pre>" . $e->getTraceAsString() . "</pre>";
            exit;
        });
    })->create();

if (isset($_ENV['VERCEL_STORAGE']) || isset($_SERVER['VERCEL_STORAGE'])) {
    $storage = $_ENV['VERCEL_STORAGE'] ?? $_SERVER['VERCEL_STORAGE'];
    $app->useStoragePath($storage);

    // Fix: Target class [view] does not exist. 
    // This happens because package discovery fails on Vercel's read-only filesystem.
    $app->register(\Illuminate\View\ViewServiceProvider::class);
    $app->register(\Illuminate\Translation\TranslationServiceProvider::class);
    $app->register(\Illuminate\Filesystem\FilesystemServiceProvider::class);
}

return $app;
