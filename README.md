# Abstract Tree Interfaces

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This is a collection of **interfaces** for an abstract tree.

Each node has the option of being a parent.  The API closely resembles the DOM implementation.

This is __not__ an implementation.  For an implementation, see:

- [Simple Tree for PHP](https://github.com/abcarroll/tree-simple-php)


## Install

Via Composer

``` bash
$ composer require ab/tree-abstract
```

## Usage

Use the interfaces to implement your own versions of `Node`, `NodeParent`, etc.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Credits

- [A.B. Carroll][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/ab/tree-abstract-php.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ab/tree-abstract-php/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/ab/tree-abstract-php.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/ab/tree-abstract-php.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ab/tree-abstract-php.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/ab/tree-abstract-php
[link-travis]: https://travis-ci.org/ab/tree-abstract-php
[link-scrutinizer]: https://scrutinizer-ci.com/g/ab/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/ab/tree-abstract-php
[link-downloads]: https://packagist.org/packages/ab/tree-abstract-php
[link-author]: https://github.com/abcarroll
[link-contributors]: ../../contributors
