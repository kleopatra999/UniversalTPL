# UniversalTpl

An Universal Template Wrapper written in PHP7.

* Render in any engine
* Built in support for _Blade_, _Dwoo_, _Mustache_, _Plates_, _Smarty_ and _Twig_.

## Installation
Install UniversalTpl via [composer](http://getcomposer.org/).
```
composer require universaltpl/universaltpl
```

## Example
```php
<?php

require __DIR__ . '/vendor/autoload.php';

$configuration = new \UniversalTpl\Configuration(
	\UniversalTpl\Configuration::TWIG,
	[
		'template_dir' => __DIR__ . '/tests',
		'compile_dir'  => __DIR__ . '/templates_c',
		'config_dir'   => __DIR__ . '/configs/',
		'cache_dir'    => __DIR__ . '/cache/'
	]
);

$wrapper  = new \UniversalTpl\Wrapper($configuration);
echo $wrapper->render('index.twig', ['name' => 'david']);
```

## Rendering engine

### Blade
```php
$configuration = new \UniversalTpl\Configuration(
	\UniversalTpl\Configuration::BLADE,
	[
	
	]
);
```

### Dwoo
```php
$configuration = new \UniversalTpl\Configuration(
	\UniversalTpl\Configuration::DWOO,
	[
	
	]
);
```

### Mustache
```php
$configuration = new \UniversalTpl\Configuration(
	\UniversalTpl\Configuration::MUSTACHE,
	[
	
	]
);
```

### Plates
```php
$configuration = new \UniversalTpl\Configuration(
	\UniversalTpl\Configuration::PLATES,
	[
	
	]
);
```

### Smarty
```php
$configuration = new \UniversalTpl\Configuration(
	\UniversalTpl\Configuration::SMARTY,
	[
	
	]
);
```

### Twig
```php
$configuration = new \UniversalTpl\Configuration(
	\UniversalTpl\Configuration::TWIG,
	[
	
	]
);
```

## About

### Requirements
UniversalTpl works only with **PHP7** or above.