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
$wrapper  = new \UniversalTpl\Wrapper($configuration);
echo $wrapper->render('index', ['name' => 'david']);
```

### Dwoo
```php
$configuration = new \UniversalTpl\Configuration(
	\UniversalTpl\Configuration::DWOO,
	[
	
	]
);
$wrapper  = new \UniversalTpl\Wrapper($configuration);
echo $wrapper->render('index.tpl', ['name' => 'david']);
```

### Mustache
```php
$configuration = new \UniversalTpl\Configuration(
	\UniversalTpl\Configuration::MUSTACHE,
	[
	
	]
);
$wrapper  = new \UniversalTpl\Wrapper($configuration);
echo $wrapper->render('index', ['name' => 'david']);
```

### Plates
```php
$configuration = new \UniversalTpl\Configuration(
	\UniversalTpl\Configuration::PLATES,
	[
	
	]
);
$wrapper  = new \UniversalTpl\Wrapper($configuration);
echo $wrapper->render('index', ['name' => 'david']);
```

### Smarty
```php
$configuration = new \UniversalTpl\Configuration(
	\UniversalTpl\Configuration::SMARTY,
	[
	
	]
);
$wrapper  = new \UniversalTpl\Wrapper($configuration);
echo $wrapper->render('index.tpl', ['name' => 'david']);
```

### Twig
```php
$configuration = new \UniversalTpl\Configuration(
	\UniversalTpl\Configuration::TWIG,
	[
	
	]
);
$wrapper  = new \UniversalTpl\Wrapper($configuration);
echo $wrapper->render('index.twig', ['name' => 'david']);
```

## About

### Requirements
UniversalTpl works only with **PHP7** or above.