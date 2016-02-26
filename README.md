Laravel Mail CSS Inliner
=========

> Automatically inline CSS for Laravel emails

[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](http://www.opensource.org/licenses/MIT)
[![Latest Version](http://img.shields.io/packagist/v/pulkitjalan/laravel-mail-css-inliner.svg?style=flat-square)](https://packagist.org/packages/pulkitjalan/laravel-mail-css-inliner)
[![Total Downloads](https://img.shields.io/packagist/dt/pulkitjalan/laravel-mail-css-inliner.svg?style=flat-square)](https://packagist.org/packages/pulkitjalan/laravel-mail-css-inliner)

## Requirements

- PHP >= 5.5.9
- Laravel >= 5.0

## Installation

Install via [composer](https://getcomposer.org/) - edit your `composer.json` to require the package.

```js
"require": {
    "pulkitjalan/laravel-mail-css-inliner": "0.1.*"
}
```

Then run `composer update` in your terminal to pull it in.

Now add the following to the `providers` array in your `config/app.php`

```php
PulkitJalan\LaravelMailCssInliner\LaravelMailCssInlinerServiceProvider::class
```
