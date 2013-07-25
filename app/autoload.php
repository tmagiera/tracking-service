<?php

use Composer\Autoload\ClassLoader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

/**
 * @var $loader ClassLoader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

$loader->add('FOS', __DIR__.'/../vendor/bundles');
$loader->add('FOS\\Rest', __DIR__.'/../vendor/fos');

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
