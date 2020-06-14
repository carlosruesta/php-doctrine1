<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$entityManager = EntityManagerFactory::getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/** @var Aluno[] $alunos */
$alunos = $alunoRepository->findAll();

foreach ($alunos as $aluno) {
    echo "Id = {$aluno->getId()}    Nome = {$aluno->getNome()} \n";
}

/* Outras formas de recuperar dados

// buscar por um registro
$aluno = $alunoRepository->find(4);

// retorna um array de alunos
$aluno = $alunoRepository->findBy(["nome" => "Gabriel"]);

// retorna um objeto Aluno
$aluno = $alunoRepository->findOneBy(["nome" => "Gabriel"]);
var_dump($aluno);


 */