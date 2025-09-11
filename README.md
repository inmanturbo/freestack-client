# This is my package freestack-client

[![Latest Version on Packagist](https://img.shields.io/packagist/v/inmanturbo/freestack-client.svg?style=flat-square)](https://packagist.org/packages/inmanturbo/freestack-client)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/inmanturbo/freestack-client/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/inmanturbo/freestack-client/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/inmanturbo/freestack-client/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/inmanturbo/freestack-client/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/inmanturbo/freestack-client.svg?style=flat-square)](https://packagist.org/packages/inmanturbo/freestack-client)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require inmanturbo/freestack-client
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="freestack-client-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="freestack-client-config"
```

This is the contents of the published config file:

```php
return [
];
```

Publish the views using

```bash
php artisan vendor:publish --tag="app-views" --force
```

## Usage

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [inmanturbo](https://github.com/inmanturbo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
