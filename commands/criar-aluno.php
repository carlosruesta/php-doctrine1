<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerFactory::getEntityManager();

$nome = $argv[1];

$aluno = new Aluno();
$aluno->setNome($nome);

for ($i = 2; $i < $argc; $i++) {
    $numeroTelefone = $argv[$i];

    $telefone = new Telefone();
    $telefone->setNumero($numeroTelefone);

    //$entityManager->persist($telefone);

    $aluno->addTelefone($telefone);
}

$entityManager->persist($aluno);
$entityManager->flush();