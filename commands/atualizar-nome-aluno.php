<?php

$id = $argv[1];
$nome = $argv[2];

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$entityManager = EntityManagerFactory::getEntityManager();

// Procurar aluno via Repository

// $alunoRepository = $entityManager->getRepository(Aluno::class);
// $aluno = $alunoRepository->find($id);
//$aluno->setNome($nome);

// da pra procurar via EntityManager, assim não precisa criar a classe Repository
/** @var Aluno $aluno */
$aluno = $entityManager->find(Aluno::class, $id);
$aluno->setNome($nome);

// não precisa de persist pois o objeto $aluno já é um objeto gerenciado pelo Doctrine

$entityManager->flush();