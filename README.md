# php-i18n - simplest way to internationalize your website

## Getting Started
php-i18n is a class allowing to easily internationalize a website using json files.

## Prerequisites
PHP 5 >= 5.2.0, PECL json >= 1.2.0, PHP 7

## How to use
1st : register Autoloader.php in the index.php

  ```php
<?php
//path : index.php
use \App\Autoloader;

require 'app/class/Autoloader.php';
Autoloader::register();
//...
```

2nd : create new Lang class (here, we use Lang(); in 'app/class/Lang.php')
```php
//...
$lang = new App\Lang();
$json = $lang->expose();
```
3rd : use $json->variable, that you define in your 'app/i18n/xx.json'
```php
<?= $json->homeTitle; ?>
```

## Can i add languages ?

To add more languages, create a json with the language name

**Example**

* **German** - *de*
* **Polish** - *pl*

In 'app/class/Lang.php', simply add new condition with the language name

```php
 elseif ($lang == 'de') :
            //German language
            $content = file_get_contents("app/i18n/$lang.json", true);
 elseif ($lang == 'pl') :
            //Polish language
            $content = file_get_contents("app/i18n/$lang.json", true);
```

The end
