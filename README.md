YellowCube PHP SDK
=========================

Connect to the SOAP based [YellowCube Solutions](http://yellowcube.ch/).
[![Build Status](https://travis-ci.org/swisspost-yellowcube/yellowcube-php.svg)](https://travis-ci.org/swisspost-yellowcube/yellowcube-php)

Integrations
------------

 * Drupal module [drupal-yellowcube](https://github.com/swisspost-yellowcube/drupal-yellowcube)
 * Magento extension [magento-yellowcube](https://github.com/swisspost-yellowcube/magento-yellowcube)


Requirements
------------

 * PHP >= 5.6 (Compatible and tested with PHP 7.0, 7.1, 7.2 and 7.3 as well)
 * PHP [SOAP extension](http://php.net/manual/en/book.soap.php)

Manual Installation
-------------------

With composer:

    composer require swisspost-yellowcube/yellowcube-php

Development
-----------

1. `git clone https://github.com/swisspost-yellowcube/yellowcube-php.git`
2. Install dependencies `composer install`
3. Run tests `vendor/phpspec/phpspec/bin/phpspec run`
4. Check coding standards compliance `bin/phpcs --standard=PSR1,PSR2 --extensions=php ./src ./spec`

This project uses [semver](http://semver.org/) for versioning and [PSR-1](http://www.php-fig.org/psr/psr-1/)
and [PSR-2](http://www.php-fig.org/psr/psr-2/) coding standards.

Documentation
-------------

The complete documentation can be found [here](http://swisspost-yellowcube.github.io/yellowcube-php/).

License
-------

The YellowCube PHP Library is dual licensed under the MIT or GPL Version 2 (or later) licenses.
