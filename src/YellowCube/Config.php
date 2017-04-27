<?php

namespace YellowCube;

use \Assert\Assertion;

/**
 * Contains credentials, wsdl to use and other configuration options.
 *
 * There are factory methods e.g. testConfig() or proxyConfig() which can be used
 * for testing.
 *
 * @package YellowCube
 */
class Config
{
    /**
     * @const string Path to YellowCubes production WSDL file.
     */
    const WSDL_PRODUCTION = 'https://service.swisspost.ch/apache/yellowcube/?wsdl';

    /**
     * @const string Path to YellowCubes test WSDL file.
     */
    const WSDL_TEST = 'https://service-test.swisspost.ch/apache/yellowcube-test/?wsdl';

    /**
     * @var string
     */
    protected $sender;

    /**
     * @var string
     */
    protected $wsdl;

    /**
     * @var integer
     */
    protected $timeoutSec;

    /**
     * @var array
     */
    protected $soapClientOptions = array();

    /**
     * @var string
     */
    protected $receiver;

    /**
     * @var bool
     */
    protected $operatingMode;

    /**
     * Create a Config.
     *
     * @param string $sender Sender code to use.
     * @param string $wsdl WSDL file to use (local path or URL), null means default depending on the debug mode.
     * @param int $timeoutSec (Optional) Timeout in seconds, null means no timeout.
     * @param string $operatingMode (Optional) Operating mode, default is "P" for production. "D" = Development, "T" = Test.
     * @param array $soapClientOptions (Optional) Options for SoapClient.
     * @param string $receiver (Optional) Receiver code to use, default: YELLOWCUBE.
     */
    function __construct($sender, $wsdl = null, $timeoutSec = null, $operatingMode = 'P', array $soapClientOptions = array(), $receiver = 'YELLOWCUBE')
    {
        Assertion::notEmpty($sender, 'Sender must be set.');
        Assertion::nullOrNotEmpty($wsdl, 'WSDL must be set.');
        Assertion::nullOrInteger($timeoutSec, 'Timeout must be null or an integer in seconds.');
        Assertion::choice($operatingMode, array('T', 'D', 'P'), 'Operating mode must be "T", "D" or "P".');
        Assertion::notEmpty($receiver, 'Receiver must be set.');

        $this->sender = $sender;
        $this->wsdl = $wsdl;
        $this->timeoutSec = $timeoutSec;
        $this->operatingMode = $operatingMode;
        $this->soapClientOptions = $soapClientOptions;
        $this->receiver = $receiver;
    }

    /**
     * Returns a config which can be used for testing.
     *
     * @return Config
     */
    public static function testConfig()
    {
        return new self('YCTest', 'https://service-test.swisspost.ch/apache/yellowcube-test/?wsdl', null, 'T');
    }

    /**
     * Returns a config which can be used for integration tests.
     *
     * @return Config
     */
    public static function integrationConfig()
    {
        return new self('Testshop06', 'https://service-test.swisspost.ch/apache/yellowcube-int/?wsdl', null, 'D');
    }

    /**
     * Returns a config which can be used for testing (with a proxy).
     *
     * @return Config
     */
    public static function proxyConfig()
    {
        $options = array(
            'proxy_host' => '127.0.0.1',
            'proxy_port' => '8888',
        );

        return new self('YCTest', 'https://service-test.swisspost.ch/apache/yellowcube-test/?wsdl', null, 'T', $options);
    }

    /**
     * @return array
     */
    public function getSoapClientOptions()
    {
        return $this->soapClientOptions;
    }

    /**
     * @return string
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @return string
     */
    public function getWsdl()
    {
        if (empty($this->wsdl)) {
            $wsdls = array(
                'T' => self::WSDL_TEST,
                'D' => self::WSDL_TEST,
                'P' => self::WSDL_PRODUCTION
            );
            return $wsdls[$this->getOperatingMode()];
        }

        return $this->wsdl;
    }

    /**
     * @return bool Operating mode, "P" for production, "D" = Development, "T" = Test.
     */
    public function getOperatingMode()
    {
        return $this->operatingMode;
    }

    /**
     * @return int Timeout in seconds.
     */
    public function getTimeoutSec()
    {
        return $this->timeoutSec;
    }

    /**
     * @return string
     */
    public function getCertificateFilePath()
    {
        return $this->soapClientOptions['local_cert'];
    }

    /**
     * Sets a certificate file path and optional passphrase to use.
     *
     * @param string $certificateFilePath Path to a certificate file.
     * @return Config
     *
     * @throws \InvalidArgumentException If certificate path is invalid.
     */
    public function setCertificateFilePath($certificateFilePath, $passphrase = null)
    {
        Assertion::file($certificateFilePath);
        Assertion::readable($certificateFilePath);
        $this->certificateFilePath = $certificateFilePath;

        $this->soapClientOptions['local_cert'] = $certificateFilePath;

        if (!empty($passphrase)) {
            $this->soapClientOptions['passphrase'] = $passphrase;
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getCertificatePassphrase()
    {
        return $this->soapClientOptions['passphrase'];
    }
}
