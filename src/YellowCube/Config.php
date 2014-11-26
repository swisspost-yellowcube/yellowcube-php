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
    protected $debugMode;

    /**
     * Create a Config.
     *
     * @param string $sender Sender code to use.
     * @param string $wsdl WSDL file to use (local path or URL).
     * @param int $timeoutSec (Optional) Timeout in seconds, null means no timeout.
     * @param bool $debugMode (Optional) Enable debug mode, default false.
     * @param array $soapClientOptions (Optional) Options for SoapClient.
     * @param string $receiver (Optional) Receiver code to use, default: YELLOWCUBE.
     */
    function __construct($sender, $wsdl, $timeoutSec = null, $debugMode = false, array $soapClientOptions = array(), $receiver = 'YELLOWCUBE')
    {
        \Assert\that($sender)->notEmpty()->string('Sender must be set.');
        \Assert\that($wsdl)->notEmpty()->string('WSDL must be set.');
        \Assert\that($timeoutSec)->nullOr()->integer('Timeout must be null or an integer in seconds.');
        \Assert\that($debugMode)->boolean('Debug mode must be a boolean.');
        \Assert\that($receiver)->notEmpty()->string('Receiver must be set.');

        $this->sender = $sender;
        $this->wsdl = $wsdl;
        $this->debugMode = $debugMode;
        $this->timeoutSec = $timeoutSec;
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
        return new self('YCTest', __DIR__ . '/../../YellowCubeService_009/YellowCubeService_extern.wsdl', null, true);
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

        return new self('YCTest', __DIR__ . '/../../YellowCubeService_009/YellowCubeService_extern.wsdl', null, true, $options);
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
        return $this->wsdl;
    }

    /**
     * @return bool True if debug mode is enabled, false otherwise.
     */
    public function isDebugMode()
    {
        return $this->debugMode;
    }

    /**
     * @return int Timeout in seconds.
     */
    public function getTimeoutSec()
    {
        return $this->timeoutSec;
    }

    public function getTimeout()
    {
        // TODO: write logic here
    }
}
