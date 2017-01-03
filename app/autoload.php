<?php

use Composer\Autoload\ClassLoader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Dotenv\Dotenv;

/** @var ClassLoader $loader */
$loader = require __DIR__ . '/../vendor/autoload.php';

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

$dotenv = new Dotenv(__DIR__ . '/../');
$dotenv->load();

return $loader;
