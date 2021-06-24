<?php
/**
 * Local Configuration Override for DEVELOPMENT MODE.
 *
 * This configuration override file is for providing configuration to use while
 * in development mode. Run:
 *
 * <code>
 * $ composer development-enable
 * </code>
 *
 * from the project root to copy this file to development.local.php and enable
 * the settings it contains.
 *
 * You may also create files matching the glob pattern `{,*.}{global,local}-development.php`.
 */
use Doctrine\DBAL\Driver\PDOMySql\Driver as PDOMySqlDriver;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => PDOMySqlDriver::class,
                'params' => [
                    'host'     => 'localhost',                    
                    'user'     => 'books',
                    'password' => '123456',
                    'dbname'   => 'books',
                ]
            ],            
        ],        
    ],
    'migrations_configuration' => [
        'orm_default' => [
            'directory' => 'data/Migrations',
            'name'      => 'Doctrine Database Migrations',
            'namespace' => 'Migrations',
            'table'     => 'migrations',
        ],
    ],
    'view_manager' => [
        'display_exceptions' => true,
    ],
];