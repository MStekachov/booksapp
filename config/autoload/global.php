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
use Doctrine\DBAL\Driver\PDOMySql\Driver as MySqlDriver;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => PDOMySqlDriver::class,
                'params' => [
                    'host'     => '127.0.0.1',                    
                    'user'     => 'mistek',
                    'password' => '123456',
                    'dbname'   => 'books',
                ]
            ],            
        ],        
    ],
    'view_manager' => [
        'display_exceptions' => true,
    ],
];