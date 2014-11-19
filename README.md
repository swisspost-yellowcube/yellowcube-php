YellowCube PHP client API
=========================

Connect to the SOAP based [YellowCube Solutions](http://yellowcube.ch/).

Integrations
------------

 * Drupal module [drupal-yellowcube](https://github.com/liip/drupal-yellowcube)


Requirements
------------

 * PHP > 5.3
 * PHP [SOAP extension](http://php.net/manual/en/book.soap.php)

Manual Installation
-------------------

With composer:

    composer require TO-BE-DEFINED/yellowcube-php

Development
-----------

1. `git clone https://github.com/liip/yellowcube-php.git`
2. Install dependencies `composer install`
2. Generate classes from WSDL `php bin/generate.php`
2. Run tests `phpunit`
