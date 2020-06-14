<?php

return [
    'name'                    => 'Curso de Doctrine',
    'migrations_namespace'    => 'Alura\\Doctrine\\Migrations',
    'table_name'              => 'doctrine_migration_versions',
    'column_name'             => 'version',
    'column_length'           => 14,
    'executed_at_column_name' => 'executed_at',
    'migrations_directory'    => '/src/Migrations',
    'all_or_nothing'          => true,
    'check_database_platform' => true,
];

/**
 * Config para o migrations 3.0
 * Nâo será usada neste treinamento
 */
return [
    'name' => 'Curso de Doctrine',
    'table_storage' => [
        'table_name' => 'doctrine_migration_versions',
        'version_column_name' => 'version',
        'version_column_length' => 1024,
        'executed_at_column_name' => 'executed_at',
        'execution_time_column_name' => 'execution_time',
    ],
    'migrations_paths' => [
        'Alura\\Doctrine\\Migrations' => '/src/Migrations',
    ],
    'all_or_nothing' => true,
    'check_database_platform' => true,
];
