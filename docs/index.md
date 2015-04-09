title:  PHP Library
---

This is the documentation for the PHP API library which can be used to
connect to the SOAP based YellowCube Interface.

This API is designed to closely match the YellowCube SOAP Interface.
Please consult the YellowCube Interface Manual for process descriptions, questions regarding
formats and example values.

# Integrations

<a href="https://github.com/swisspost-yellowcube/drupal-yellowcube" class="integration drupal-integration">
    Drupal module: drupal-yellowcube.
</a>

<a href="https://github.com/swisspost-yellowcube/magento-yellowcube" class="integration magento-integration">
    Magento module: magento-yellowcube.
</a>

# Installation

This library is using [Composer](https://getcomposer.org/) to manage dependencies.
Please see the [installation section](https://getcomposer.org/doc/00-intro.md) on the composer website.

To use the library in your project simply require it.

    composer require swisspost-yellowcube/yellowcube-php

# Requirements

 * PHP >= 5.3
 * PHP [SOAP extension](http://php.net/manual/en/book.soap.php)
 * [Composer](https://getcomposer.org/)

# Configuration

YellowCube Credentials, the WSDL to use, enabling or disabling a debug mode can
be configured using the `YellowCube\Config` which is passed to the `YellowCube\Service`.

To get started quickly, you can use a test configuration:

    $service = new YellowCube\Service(YellowCube\Config::testConfig());

For a list of all configuration options see the [configuration section](library/Configuration.html).

# License

The YellowCube PHP Library is dual licensed under the MIT or GPL Version 2 licenses.
