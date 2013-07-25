<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var $loader ClassLoader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

$loader->add('FOS', __DIR__.'/../vendor/bundles');
$loader->add('FOS\\Rest', __DIR__.'/../vendor/fos');

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;
AnnotationDriver::registerAnnotationClasses();

return $loader;
