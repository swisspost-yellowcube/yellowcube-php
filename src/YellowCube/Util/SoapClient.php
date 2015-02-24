<?php

namespace YellowCube\Util;

use Wse\WSASoap;
use Wse\WSSESoap;
use Wse\XMLSecurityKey;

/**
 * Sets default options for SoapClient.
 *
 * Also adds better error formatting.
 *
 * @package YellowCube\Util
 */
class SoapClient extends \SoapClient
{
    /**
     * @var array Soap client options.
     */
    protected $options = array();

    /**
     * @var string Loaded certificate.
     */
    protected $certificateContent;

    /**
     * @param mixed $wsdl
     * @param array $options
     */
    public function __construct($wsdl, $options)
    {
        $defaultOptions = array(
            'soap_version' => SOAP_1_1,

            // Enables tracing for __getLastRequest() support.
            'trace' => true,

            // Always return an array for a sequence of elements.
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,

            // Map specified response classes (without namespace)
            // to internal objects.
            'classmap' => array(
                'GEN_Response' => 'YellowCube\GEN_Response',
                'Article' => 'YellowCube\BAR\Article',
                'QuantityUOM' => 'YellowCube\BAR\QuantityUOM',
                'GoodsIssue' => 'YellowCube\WAR\GoodsIssue\GoodsIssue',
                'GoodsIssueHeader' => 'YellowCube\WAR\GoodsIssue\GoodsIssueHeader',
                'CustomerOrderHeader' => 'YellowCube\WAR\GoodsIssue\CustomerOrderHeader',
                'CustomerOrderDetail' => 'YellowCube\WAR\GoodsIssue\CustomerOrderDetail',
            )
        );

        $this->options = array_merge($defaultOptions, $options);
        
        parent::__construct($wsdl, $this->options);
    }

    /**
     * @inheritdoc
     */
    public function __doRequest($request, $location, $action, $version, $one_way = NULL)
    {
        $doc = new \DOMDocument();
        $doc->loadXML($request);

        $wsse = new WSSESoap($doc);
        $wsse->addTimestamp();

        $key = new XMLSecurityKey(XMLSecurityKey::RSA_SHA1, array('type'=>'private'));
        $key->loadKey($this->getCertificateContent());
        $wsse->signSoapDoc($key);

        $token = $wsse->addBinaryToken($this->getCertificateContent());
        $wsse->attachTokentoSig($token);

        $signedRequest = $wsse->saveXML();

        return parent::__doRequest($signedRequest, $location, $action, $version);
    }

    /**
     * Calls the specified method on the SOAP server.
     *
     * @param string $method
     * @param string $args
     * @return mixed|void
     *
     * @throws YellowCubeException if a SOAP error occurs.
     */
    public function __call($method, $args)
    {
        try {
            return parent::__call($method, $args);
        } catch (\Exception $e) {
            $message = $e->getMessage();
            $message .= PHP_EOL . PHP_EOL . 'Request XML: ' . PHP_EOL . $this->__getLastRequest();
            throw new YellowCubeException($message, $e->getCode(), $e);
        }
    }

    /**
     * Returns content of the certificate passed  in 'local_cert'.
     *
     * @return string Content of the certificate passed  in 'local_cert'.
     */
    protected function getCertificateContent() {
        if (empty($this->certificateContent)) {
            $this->certificateContent = file_get_contents($this->options['local_cert']);
        }

        return $this->certificateContent;
    }
}
