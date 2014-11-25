title: Configuration
---

Create a new Configuration use:

    new YellowCube\Config($sender, $wsdl, $debugMode, $soapClientOptions, $receiver)

Constructor arguments are:

 * `$sender`: Mandatory <Depositor-ID> (Distance seller ID) in accordance with the registration to YellowCube Format: "Xxxxxxxxxxx"
 * `$wsdl`: Mandatory WSDL file to use. This can be a path to a local file or a URL.
 * `$debugMode`: Optional enable test mode, by default the production mode is used (`false`).
 * `$soapClientOptions`: Optional options which are passed to the [SoapClient](http://php.net/manual/en/class.soapclient.php).
 * `$receiver`: Optional receiver constant, by default `YELLOWCUBE`.

### Test configuration

To receive a configuration with an enabled debug mode, which can be used for testing use:

    Config::testConfig();

### Proxy configuration

For testing with a proxy like [Charles](http://www.charlesproxy.com/) you can use the following
testing configuration.

    Config::proxyConfig();

The configuration expects a HTTP Proxy running on host `127.0.0.1` and port `8888`.