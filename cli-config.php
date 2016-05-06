<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

$loader = require 'app/autoload.php';
require_once 'var/bootstrap.php.cache';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$kernel->boot();

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = $kernel->getContainer()->get('doctrine.orm.entity_manager');

return ConsoleRunner::createHelperSet($entityManager);
