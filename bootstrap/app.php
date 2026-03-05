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
        //
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
