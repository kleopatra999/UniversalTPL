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

### Twig full PHP example
```php
<?php
// Require Composer's autoloader
require __DIR__ . '/vendor/autoload.php';

// Create configuration
$configuration = new \FlexyProject\UniversalTpl\Configuration(
	\FlexyProject\UniversalTpl\Configuration::TWIG,
	[
		'template_dir' => __DIR__ . '/tests',
		'compile_dir'  => __DIR__ . '/templates_c',
		'config_dir'   => __DIR__ . '/configs/',
		'cache_dir'    => __DIR__ . '/cache/'
	]
);

// Create wrapper class
$wrapper  = new \FlexyProject\UniversalTpl\Wrapper($configuration);

// Render template
echo $wrapper->render('index', ['name' => 'david']);
```

### Twig template example
```tpl
hello {{ name }}
```

## Rendering engine

### Blade
```php
$configuration = new \FlexyProject\UniversalTpl\Configuration(
	\FlexyProject\UniversalTpl\Configuration::BLADE,
	[
	]
);
```

### Dwoo
```php
$configuration = new \FlexyProject\UniversalTpl\Configuration(
	\FlexyProject\UniversalTpl\Configuration::DWOO,
	[
	]
);
```

### Mustache
```php
$configuration = new \FlexyProject\UniversalTpl\Configuration(
	\FlexyProject\UniversalTpl\Configuration::MUSTACHE,
	[
	]
);
```

### Plates
```php
$configuration = new \FlexyProject\UniversalTpl\Configuration(
	\FlexyProject\UniversalTpl\Configuration::PLATES,
	[
	]
);
```

### Smarty
```php
$configuration = new \FlexyProject\UniversalTpl\Configuration(
	\FlexyProject\UniversalTpl\Configuration::SMARTY,
	[
	]
);
```

### Twig
```php
$configuration = new \FlexyProject\UniversalTpl\Configuration(
	\FlexyProject\UniversalTpl\Configuration::TWIG,
	[
	]
);
```

## About

### Requirements
UniversalTpl works only with **PHP7** or above.