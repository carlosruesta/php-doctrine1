<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$entityManager = EntityManagerFactory::getEntityManager();

$id = $argv[1];

//// Remover aluno via Repository
///** @var \Doctrine\ORM\EntityRepository $alunoRepository */
//$alunoRepository = $entityManager->getRepository(Aluno::class);
///** @var Aluno $aluno */
//$aluno = $alunoRepository->find($id);
//$entityManager->remove($aluno);


//// Remover aluno sem repository
//$aluno = $entityManager->find(Aluno::class, $id);
//$entityManager->remove($aluno);

// Remover aluno sem repository via getReference
$aluno = $entityManager->getReference(Aluno::class, $id);
$entityManager->remove($aluno);

// não precisa de persist pois o objeto $aluno já é um objeto gerenciado pelo Doctrine

$entityManager->flush();