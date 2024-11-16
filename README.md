[![GitHub Workflow](https://github.com/fawno/sanitize/actions/workflows/php.yml/badge.svg)](https://github.com/fawno/sanitize/actions/workflows/php.yml)
[![GitHub license](https://img.shields.io/github/license/fawno/sanitize)](https://github.com/fawno/sanitize/blob/master/LICENSE)
[![GitHub tag (latest SemVer)](https://img.shields.io/github/v/tag/fawno/sanitize)](https://github.com/fawno/sanitize/tags)
[![Packagist](https://img.shields.io/packagist/v/fawno/sanitize)](https://packagist.org/packages/fawno/sanitize)
[![Packagist Downloads](https://img.shields.io/packagist/dt/fawno/sanitize)](https://packagist.org/packages/fawno/sanitize/stats)
[![GitHub issues](https://img.shields.io/github/issues/fawno/sanitize)](https://github.com/fawno/sanitize/issues)
[![GitHub forks](https://img.shields.io/github/forks/fawno/sanitize)](https://github.com/fawno/sanitize/network)
[![GitHub stars](https://img.shields.io/github/stars/fawno/sanitize)](https://github.com/fawno/sanitize/stargazers)

# sanitize

Simple PHP function for sanitize strings

# Table of contents
- [Installation](#installation)
	- [Composer install](#composer-install)
	- [Manual install](#manual-install)
- [Usage](#usage)

## Installation

### Composer install
You can install this plugin into your application using [composer](https://getcomposer.org):

- Add fawno/sanitize package to your project:
  ```bash
    composer require fawno/sanitize
  ```

- Load the function Fawno\sanitize in your project
  ```php
  <?php
    require 'vendor/autoload.php';
    use function Fawno\sanitize;
  ```

[TOC](#table-of-contents)

### Manual install
- Download [sanitize.php](https://github.com/fawno/sanitize/raw/master/src/sanitize.php) and save it to an accessible path of your project.
- Load the function Fawno\sanitize in your project
  ```php
  <?php
    require 'sanitize.php';
    use function Fawno\sanitize;
  ```

[TOC](#table-of-contents)

## Usage
```php
  use function Fawno\sanitize;
  echo sanitize('Álava');
```

[TOC](#table-of-contents)
