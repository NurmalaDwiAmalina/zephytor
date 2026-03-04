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

    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);
    echo "<h1>Vercel Deployment Error</h1>";
    echo "<pre>Message: " . $e->getMessage() . "</pre>";
    echo "<pre>File: " . $e->getFile() . " on line " . $e->getLine() . "</pre>";
    echo "<h3>Stack Trace:</h3>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
