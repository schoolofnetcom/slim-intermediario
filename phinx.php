<?php

require __DIR__.'/helpers/helpers.php';

return [
    'paths' => [
        'migrations' => path_modules('/db/migrations'),
        'seeds' => path_modules('/db/seeds')
    ],

    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_database' => 'development',

        'production' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'production_db',
            'user' => 'root',
            'pass' => '',
            'port' => '3306',
            'charset' => 'utf8',
        ],

        'development' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'curso_slim_intermediario',
            'user' => 'root',
            'pass' => '1234',
            'port' => '3306',
            'charset' => 'utf8',
        ],

        'testing' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'testing_db',
            'user' => 'root',
            'pass' => '',
            'port' => '3306',
            'charset' => 'utf8',
        ],
    ],
    'version_order' => 'creation'
];
