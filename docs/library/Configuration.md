title: Configuration
---

To create a new configuration use:

    new YellowCube\Config($sender, $wsdl, $timeout, $debugMode, $soapClientOptions, $receiver)

Constructor arguments are:

 * `$sender`: Mandatory <Depositor-ID> (Distance seller ID) in accordance with the registration to YellowCube Format: "Xxxxxxxxxxx"
 * `$wsdl`: Optional WSDL file to use. This can be a path to a local file or a URL. If no value is provided, the production WSDL is used (if debug mode is `false`) or the test WSDL is used (if debug mode is `true`).
 * `$timeout`: Optional timeout in seconds for a transaction to finish, by default no timeout is set.
 * `$operatingMode`: Optional operating mode, default is "P" for production. "D" = Development, "T" = Test.
 * `$soapClientOptions`: Optional options which are passed to the [SoapClient](http://php.net/manual/en/class.soapclient.php).
 * `$receiver`: Optional receiver constant, by default `YELLOWCUBE`.

### Test configuration

To receive a configuration with an operating mode set to "T" = test, which can be used for testing use:

    Config::testConfig();

### Integration configuration

To receive a configuration with an operating mode set to "D" = development, which can be used for integration tests:

    Config::integrationConfig();

### Proxy configuration

For testing with a proxy like [Charles](http://www.charlesproxy.com/) you can use the following
testing configuration.

    Config::proxyConfig();

The configuration expects a HTTP Proxy running on host `127.0.0.1` and port `8888`.

### Set certificate to use for authentication

In order to authenticate, a certificate which is registered with the YellowCube Service is necessary. To authenticate
with the certificate, set it on a configuration instance:

    $config = Config::testConfig();
    $config->setCertificateFilePath(__DIR__ . '/../client_ca.pem');

:   When you receive a `Could not connect to host` error, that probably means that the certificate is broken.

If the certificate requires a password, you can set a **passphrase** as **second parameter**.

    $config->setCertificateFilePath(__DIR__ . '/../client_ca.pem', 'passphrase');
