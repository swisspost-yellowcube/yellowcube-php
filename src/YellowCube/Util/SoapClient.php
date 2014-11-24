<?php

namespace YellowCube\Util;

class SoapClient extends \SoapClient
{

    public function __construct($wsdl, $options)
    {
        $defaultOptions = array(
            'trace' => true,
            'soap_version' => SOAP_1_1,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap' => array(
                'GEN_Response' => 'YellowCube\GEN_Response',
                'Article' => 'YellowCube\BAR\Article',
                'QuantityUOM' => 'YellowCube\BAR\QuantityUOM',
            )
        );

        parent::__construct($wsdl, array_merge($defaultOptions, $options));
    }

    public function __call($method, $args)
    {
        try {
            return parent::__call($method, $args);
        } catch (\Exception $e) {
            $message = $e->getMessage();
            $message .= PHP_EOL . PHP_EOL . 'Request XML: ' . PHP_EOL . $this->__getLastRequest();
            throw new \Exception($message);
        }
    }
}
