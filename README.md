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

Console
-------
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
Console create
```php
yii backup/console/create
```
.
