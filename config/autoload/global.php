<?php


return array(
    'db' => array(
        'driver' => 'Pdo',
        'dsn' => 'pgsql:dbname=zf2_livraria;host=localhost',
        'driver_options' => array(
       PDO::PGSQL_ATTR_INIT_COMMAND => 'SET NAMES \' UTF-8\''
        )
    )
);
