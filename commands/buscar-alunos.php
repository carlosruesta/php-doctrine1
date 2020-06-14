<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerFactory::getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/** @var Aluno[] $alunosList */
$alunosList = $alunoRepository->findAll();

foreach ($alunosList as $aluno) {
    $telefones = $aluno->getTelefones()->map(
        function (Telefone $telefone) {
            return $telefone->getNumero();
        }
    )->toArray();

    echo "Id = {$aluno->getId()}\nNome = {$aluno->getNome()}\n";
    echo "Telefones: " . implode(', ', $telefones) . "\n\n";
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