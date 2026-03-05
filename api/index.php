<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    $storage = '/tmp/storage';
    if (!is_dir($storage)) {
        @mkdir($storage . '/framework/cache/data', 0777, true);
        @mkdir($storage . '/framework/sessions', 0777, true);
        @mkdir($storage . '/framework/views', 0777, true);
        @mkdir($storage . '/logs', 0777, true);
    }

    $_ENV['VERCEL_STORAGE'] = $storage;
    $_SERVER['VERCEL_STORAGE'] = $storage;
    putenv("VERCEL_STORAGE={$storage}");

    // Ignore Vercel's read-only bootstrap/cache directory
    $cachePath = '/tmp/bootstrap/cache';
    if (!is_dir($cachePath))
        @mkdir($cachePath, 0777, true);

    @unlink(__DIR__ . '/../bootstrap/cache/services.php');
    @unlink(__DIR__ . '/../bootstrap/cache/packages.php');
    @unlink(__DIR__ . '/../bootstrap/cache/config.php');

    $_ENV['APP_SERVICES_CACHE'] = $cachePath . '/services.php';
    $_SERVER['APP_SERVICES_CACHE'] = $cachePath . '/services.php';
    putenv("APP_SERVICES_CACHE={$cachePath}/services.php");

    $_ENV['APP_PACKAGES_CACHE'] = $cachePath . '/packages.php';
    $_SERVER['APP_PACKAGES_CACHE'] = $cachePath . '/packages.php';
    putenv("APP_PACKAGES_CACHE={$cachePath}/packages.php");

    // Disable compiling views because Vercel doesn't like that directory creation either
    $_ENV['VIEW_COMPILED_PATH'] = $storage . '/framework/views';
    $_SERVER['VIEW_COMPILED_PATH'] = $storage . '/framework/views';
    putenv("VIEW_COMPILED_PATH={$storage}/framework/views");

    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);
    echo "<h1>Vercel Deployment Error</h1>";
    echo "<pre>Message: " . $e->getMessage() . "</pre>";
    echo "<pre>File: " . $e->getFile() . " on line " . $e->getLine() . "</pre>";
    echo "<h3>Stack Trace:</h3>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
