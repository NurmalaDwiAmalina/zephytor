<?php

// VERCEL_STORAGE is used in bootstrap/app.php
$storage = '/tmp/storage';
if (!is_dir($storage)) {
    @mkdir($storage . '/framework/cache/data', 0777, true);
    @mkdir($storage . '/framework/sessions', 0777, true);
    @mkdir($storage . '/framework/views', 0777, true);
    @mkdir($storage . '/logs', 0777, true);
}

$_ENV['VERCEL_STORAGE'] = $storage;
$_SERVER['VERCEL_STORAGE'] = $storage;

// Forward to public/index.php
require __DIR__ . '/../public/index.php';
