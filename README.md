# switchlang - simplest way to internationalize your website in php from scratch

## Getting Started
switchlang is a class allowing to easily internationalize a website using json files.

## Prerequisites
PHP 5 >= 5.2.0, PECL json >= 1.2.0, PHP 7

## How to use
```composer init```

```php
<?php
//path : index.php

require 'vendor/autoload.php';
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

## How to add languages ?

To add more languages, create a ```json``` file with the language name, keep the variables and replace the text

**Example**

* German : de.json
* Polish : pl.json

The end
