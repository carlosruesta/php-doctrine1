<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$entityManager = EntityManagerFactory::getEntityManager();

$nome = $argv[1];

$aluno = new Aluno();
$aluno->setNome($nome);

$entityManager->persist($aluno);
$entityManager->flush();