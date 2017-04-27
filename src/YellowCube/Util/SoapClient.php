<?php

namespace YellowCube\Util;

use Psr\Log\LoggerInterface;
use Wse\WSSESoap;
use Wse\XMLSecurityKey;

/**
 * Sets default options for SoapClient.
 *
 * Also adds better error formatting.
 *
 * @method \YellowCube\GEN_Response InsertArticleMasterData(\YellowCube\ART\Article $article)
 * @method \YellowCube\GEN_Response GetInsertArticleMasterDataStatus()
 * @method \YellowCube\GEN_Response CreateYCCustomerOrder()
 * @method \YellowCube\GEN_Response GetYCCustomerOrderStatus()
 * @method \YellowCube\GEN_Response GetYCCustomerOrderReply()
 * @method \YellowCube\GEN_Response GetInventory()
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
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @param mixed $wsdl
     * @param array $options
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct($wsdl, $options, LoggerInterface $logger)
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
        $this->logger = $logger;
    }

    /**
     * @inheritdoc
     */
    public function __doRequest($request, $location, $action, $version, $oneWay = null)
    {
        if ($this->useCertificate()) {
            $request = $this->signRequest($request);
        }

        $this->logger->debug('Request to {location}: {request}', array('location' => $location, 'request' => $request));

        $response = parent::__doRequest($request, $location, $action, $version, $oneWay);

        $this->logger->debug('Response to {location}: {response}', array('location' => $location, 'response' => $response));

        return $response;
    }

    /**
     * Signs the specified request.
     *
     * @param      $request
     * @param      $location
     * @param      $action
     * @param      $version
     * @param null $oneWay
     *
     * @return string Signed request.
     * @throws \Exception
     */
    protected function signRequest($request)
    {
        $doc = new \DOMDocument();
        $doc->loadXML($request);

        $wsse = new WSSESoap($doc);
        $wsse->addTimestamp();

        $key = new XMLSecurityKey(XMLSecurityKey::RSA_SHA1, array('type'=>'private'));
        if (!empty($this->options['passphrase'])) {
            $key->passphrase = $this->options['passphrase'];
        }
        $key->loadKey($this->getCertificateContent());

        $wsse->signSoapDoc($key);

        $token = $wsse->addBinaryToken($this->getCertificateContent());
        $wsse->attachTokentoSig($token);

        return $wsse->saveXML();
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

            $this->logger->error('Code: ' . $e->getCode() . ' ' . $message);
            throw new YellowCubeException($message, $e->getCode(), $e);
        }
    }

    /**
     * Returns true if a certificate should be used.
     *
     * @return mixed
     */
    protected function useCertificate()
    {
        return !empty($this->options['local_cert']);
    }

    /**
     * Returns content of the certificate passed  in 'local_cert'.
     *
     * @return string Content of the certificate passed  in 'local_cert'.
     */
    protected function getCertificateContent()
    {
        if (empty($this->certificateContent)) {
            $this->certificateContent = file_get_contents($this->options['local_cert']);
        }

        return $this->certificateContent;
    }
}
