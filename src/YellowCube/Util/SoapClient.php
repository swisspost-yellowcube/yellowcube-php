<?php

namespace YellowCube\Util;

/**
 * Sets default options for SoapClient.
 *
 * Also adds better error formatting.
 *
 * @package YellowCube\Util
 */
class SoapClient extends \SoapClient
{
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

        parent::__construct($wsdl, array_merge($defaultOptions, $options));
    }

    /**
     * Calls the specified method on the SOAP server.
     *
     * @param string $method
     * @param string $args
     * @return mixed|void
     *
     * @throws \Exception
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
}
