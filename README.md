# Laravel Blade Compiler

Laravel Blade Compiler with minify for personal use

## Index

- [Requirement](#requirement)
- [Installation](#installation)
- [Configuration](#configuration)
- [Reference](#reference)
- [License](#license)

## Requirement

- PHP >= 7.3
- Laravel ^7.0 or ^8.0
- blood72/blade-minify ^1.0

## Installation

Install using the composer.

```bash
composer require blood72/laravel-blade-minify-compiler
```

## Configuration

```dotenv
# enable/disable blade minifier (true/false)
BLADE_MINIFY_ENABLED=true
```

You can customize CSS, JS Minifier like under example. 

```php
// 'options' => [],

'options' => [
    'cssMinifier' => [\Minify_CSSmin::class, 'minify'],
    'jsMinifier' => function ($contents) { return \JSMin\JSMin::minify($contents); }, // you can use callback
],
```

You can publish config file.

```bash
php artisan vendor:publish --provider="Blood72\Minify\Compilers\BladeCompilerServiceProvider"
```

## Reference

- Steve Clay's [minify](https://github.com/mrclay/minify)
- Graham Campbell and Raza Mehdi's [HTMLMin](https://github.com/HTMLMin/Laravel-HTMLMin) (mainly inspired)

## License

This package is open-sourced software licensed under the MIT license.
