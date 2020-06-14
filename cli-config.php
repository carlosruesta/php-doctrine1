<?php

use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager;
use Doctrine\Migrations\Configuration\Migration\PhpFile;
use Doctrine\Migrations\DependencyFactory;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;

// replace with file to your own project bootstrap
require_once 'vendor/autoload.php';



// replace with mechanism to retrieve EntityManager in your app
$entityManager = EntityManagerFactory::getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);


/**
 * Configuração para o migrations 3.0
 */
$configLoader = new PhpFile('migrations.php'); // Or use one of the Doctrine\Migrations\Configuration\Configuration\* loaders

$paths = [__DIR__.'/src/Entity'];
$isDevMode = true;

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create(['driver' => 'pdo_sqlite', 'memory' => true], $config);

return DependencyFactory::fromEntityManager($configLoader, new ExistingEntityManager($entityManager));
