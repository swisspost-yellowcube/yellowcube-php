title: Logging
---

The `YellowCube\Service` takes a [`Psr\Log\LoggerInterface` logger](https://github.com/php-fig/log) either as constructor argument:

    $service = new YellowCube\Service($config, $soapClient, $logger);

or using a setter:

    $service->setLogger($logger);

When not setting a logger instance, a NullLogger is used which ignores all logging.

### Log levels

Of the [available log levels](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md#5-psrlogloglevel)
the following are implemented:

 * DEBUG: Log every SOAP request and response.
 * INFO: Log `YellowCube\Service` method calls.
 * ERROR: Log SOAP errors.

