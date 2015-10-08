Yii2 Dump MySQL
==========================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist octoweb/yii2-db-dump "*"
```

or add

```
"octoweb/yii2-db-dump": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply activate module in config file:

```php
<?php
    ......
   'modules' => [
        'backup' => [
            'class' => 'octoweb\DbDump\Module',
        ],
    ],
    ......

?>
```

Run migration. Module will create own table for migration history tbl_ym_migrations
```php
yii migrate/up --migrationPath=@vendor/octoweb/yii2-yandex-metrika/migrations --migrationTable=tbl_ym_migrations
```
.
