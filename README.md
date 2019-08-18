# Magento 2 Security Checker

A simple Magento 2 module which leverages the SensioLabs Security Checker to checks if our application uses dependencies with known security vulnerabilities.

SensioLabs Security Checker internally uses the [Security Check Web service](https://security.symfony.com/) and the [Security Advisories Database](https://github.com/FriendsOfPHP/security-advisories).

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