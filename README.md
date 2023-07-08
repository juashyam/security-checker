**WARNING**: Don't use this piece of software anymore as the underlying web
service will stop working at the end of January 2021. Instead, use the
[Open-Source CLI tool][1] that does the same locally, or use the [Symfony
CLI][2] tool.

[1]: https://github.com/fabpot/local-php-security-checker
[2]: https://symfony.com/download

![Security Checker](https://user-images.githubusercontent.com/13532448/123786870-d3fc9680-d8f7-11eb-9477-fd739383669b.png)

[![Latest Stable Version](http://poser.pugx.org/juashyam/security-checker/v)](https://packagist.org/packages/juashyam/security-checker)
[![Total Downloads](http://poser.pugx.org/juashyam/security-checker/downloads)](https://packagist.org/packages/juashyam/security-checker)
[![License](http://poser.pugx.org/juashyam/security-checker/license)](https://packagist.org/packages/juashyam/security-checker)

A simple Magento 2 module which leverages the [SensioLabs Security Checker](https://github.com/sensiolabs/security-checker) to checks if our application uses dependencies with known security vulnerabilities.

[SensioLabs Security Checker](https://github.com/sensiolabs/security-checker) internally uses the [Security Check Web service](https://security.symfony.com/) and the [Security Advisories Database](https://github.com/FriendsOfPHP/security-advisories).

## Installation

```
composer require juashyam/security-checker
php bin/magento module:enable Juashyam_SecurityChecker
php bin/magento setup:upgrade
```

## Features
- Analyses dependencies in `composer.lock` to show all the known vulnerabilities 

## Preview
![Security Checker Admin Menu](https://user-images.githubusercontent.com/13532448/63228007-aa0dbf80-c20a-11e9-94cb-1a772c91e8b6.png)

![Security Checker Vulnerabilities](https://user-images.githubusercontent.com/13532448/63227998-92ced200-c20a-11e9-8ce4-2d99879faca7.png)

## Authors

[Shyam Kumar](https://github.com/juashyam)

## License

This project is licensed under the MIT License
