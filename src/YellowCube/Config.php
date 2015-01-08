<?php

namespace YellowCube;

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
    CONST WSDL_PRODUCTION = 'https://service.swisspost.ch/apache/yellowcube/?wsdl';

    /**
     * @const string Path to YellowCubes test WSDL file.
     */
    CONST WSDL_TEST = 'https://service-test.swisspost.ch/apache/yellowcube-test/?wsdl';

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
     * @param bool $operatingMode (Optional) Operating mode, default is "P" for production. "D" = Development, "T" = Test.
     * @param array $soapClientOptions (Optional) Options for SoapClient.
     * @param string $receiver (Optional) Receiver code to use, default: YELLOWCUBE.
     */
    function __construct($sender, $wsdl = null, $timeoutSec = null, $operatingMode = 'P', array $soapClientOptions = array(), $receiver = 'YELLOWCUBE')
    {
        \Assert\that($sender)->notEmpty()->string('Sender must be set.');
        \Assert\that($wsdl)->nullOr()->notEmpty()->string('WSDL must be set.');
        \Assert\that($timeoutSec)->nullOr()->integer('Timeout must be null or an integer in seconds.');
        \Assert\that($operatingMode)->choice(array('T', 'D', 'P'), 'Operating mode must be "T", "D" or "P".');
        \Assert\that($receiver)->notEmpty()->string('Receiver must be set.');

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
        return new self('YCTest', __DIR__ . '/../../YellowCubeService_009/YellowCubeService_extern_test.wsdl', null, 'T');
    }

    /**
     * Returns a config which can be used for integration tests.
     *
     * @return Config
     */
    public static function integrationConfig()
    {
        return new self('Testshop06', __DIR__ . '/../../YellowCubeService_009/YellowCubeService_extern_int.wsdl', null, 'D');
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

        return new self('YCTest', __DIR__ . '/../../YellowCubeService_009/YellowCubeService_extern_test.wsdl', null, 'T', $options);
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
     * @param string $certificateFilePath
     */
    public function setCertificateFilePath($certificateFilePath, $passphrase = null)
    {
        \Assert\that($certificateFilePath)->file()->readable();
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
