<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
    'default' => array(
        'type'         => 'SQLite',
        'connection'   => array(
            'dsn'        => 'sqlite:/home/database.sqlite',
            'persistent' => false,
        ),
        'table_prefix' => '',
        'charset'      => null,
        'caching'      => false,
    ),
);