<?php

use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = EntityManagerFactory::getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);
