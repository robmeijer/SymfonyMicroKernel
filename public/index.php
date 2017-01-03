<?php

use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__ . '/../app/autoload.php';

$env = getenv('SYMFONY_ENV') ?: 'prod';
$debug = getenv('SYMFONY_DEBUG') === '1';

if ($debug) {
    Debug::enable();
}

$kernel = new MicroKernel($env, $debug);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
