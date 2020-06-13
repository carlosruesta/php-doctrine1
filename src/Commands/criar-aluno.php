<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$aluno = new Aluno();
$aluno->setNome('Vinicius Dias');

$entityManager = EntityManagerFactory::getEntityManager();

$entityManager->persist($aluno);

$aluno->setNome('Carlos Ruesta');

$entityManager->flush();