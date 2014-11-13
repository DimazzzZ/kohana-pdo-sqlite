# Kohana 3.3 PDO SQLite Driver

Small patch-module for Kohana that allows you to use SQLite database with PDO. It's simply override original
Database_PDO method list_columns().

## Database config example

```php
return array(
    'default' => array(
        'type'         => 'PDO_SQLite',
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