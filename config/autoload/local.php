<?php
return [
    'db' => [
        'adapters' => [
            'mysqlAdapter' => [
                'database' => 'apigility_basico',
                'driver' => 'PDO_Mysql',
                'hostname' => 'localhost',
                'username' => 'root',
                'password' => 'ab45',
            ],
            'adapter3' => [
                'database' => 'buqlog',
                'driver' => 'PDO_Mysql',
                'username' => 'root',
                'password' => 'ab45',
            ],
        ],
    ],
];
