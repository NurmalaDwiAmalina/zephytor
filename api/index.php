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

// Bootstrap cache must be writable on Vercel (read-only filesystem).
// Laravel checks APP_*_CACHE env vars in normalizeCachePath() to override
// where it writes cached manifests/config/routes, so we redirect to /tmp.
$bootstrapCache = '/tmp/bootstrap/cache';
if (!is_dir($bootstrapCache)) {
    @mkdir($bootstrapCache, 0777, true);
}

$_ENV['APP_PACKAGES_CACHE'] = $bootstrapCache . '/packages.php';
$_ENV['APP_SERVICES_CACHE'] = $bootstrapCache . '/services.php';
$_ENV['APP_EVENTS_CACHE'] = $bootstrapCache . '/events.php';
$_ENV['APP_ROUTES_CACHE'] = $bootstrapCache . '/routes-v7.php';
$_ENV['APP_CONFIG_CACHE'] = $bootstrapCache . '/config.php';

$_SERVER['APP_PACKAGES_CACHE'] = $bootstrapCache . '/packages.php';
$_SERVER['APP_SERVICES_CACHE'] = $bootstrapCache . '/services.php';
$_SERVER['APP_EVENTS_CACHE'] = $bootstrapCache . '/events.php';
$_SERVER['APP_ROUTES_CACHE'] = $bootstrapCache . '/routes-v7.php';
$_SERVER['APP_CONFIG_CACHE'] = $bootstrapCache . '/config.php';

// Use database session driver so sessions persist across serverless invocations.
$_ENV['SESSION_DRIVER'] = 'database';
$_ENV['CACHE_DRIVER'] = 'file';
$_SERVER['SESSION_DRIVER'] = 'database';
$_SERVER['CACHE_DRIVER'] = 'file';

// Forward to public/index.php
require __DIR__ . '/../public/index.php';
