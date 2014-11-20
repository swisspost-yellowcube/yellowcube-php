<?php

namespace YellowCube;

class Config {

    protected $sender;
    protected $wsdl;
    protected $soapClientOptions = array();
    protected $receiver;
    protected $debugMode;

    function __construct($sender, $wsdl, $debugMode = false, array $soapClientOptions = array(), $receiver = 'YELLOWCUBE')
    {
        \Assert\that($sender)->notEmpty()->string('Sender must be set.');
        \Assert\that($wsdl)->notEmpty()->string('WSDL must be set.');
        \Assert\that($debugMode)->boolean('Debug mode must be a boolean.');
        \Assert\that($receiver)->notEmpty()->string('Receiver must be set.');

        $this->sender = $sender;
        $this->wsdl = $wsdl;
        $this->soapClientOptions = $soapClientOptions;
        $this->debugMode = $debugMode;
        $this->receiver = $receiver;
    }

    /**
     * Returns a config which can be used for testing.
     *
     * @return Config
     */
    public static function testConfig() {
        return new self('YCTest', 'YellowCubeService_009/YellowCubeService_extern.wsdl', true);
    }

    /**
     * Returns a config which can be used for testing.
     *
     * @return Config
     */
    public static function proxyConfig() {
        $options = array(
            'proxy_host' => '127.0.0.1',
            'proxy_port' => '8888',
        );

        return new self('YCTest', 'YellowCubeService_009/YellowCubeService_extern.wsdl', true, $options);
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
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @return mixed
     */
    public function getWsdl()
    {
        return $this->wsdl;
    }

    public function isDebugMode()
    {
        return $this->debugMode;
    }
}
