# Kohana 3.3 PDO SQLite Driver

Database config example:

```php
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
```