<?php

namespace YellowCube\Util;

class SoapClient extends \SoapClient {

    public function __construct($wsdl, $options)  {
        $defaultOptions = array(
            'soap_version' => SOAP_1_1,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap' => array(
                'GEN_Response' => 'YellowCube\GEN_Response'
            )
        );

        parent::__construct($wsdl, array_merge($defaultOptions, $options));
    }

    public function __call($method, $args)
    {
        try {
            return parent::__call($method, $args);
        } catch (\Exception $e) {
            // var_dump($this->__getLastResponse());
            throw new \Exception($e->getMessage());
        }
    }
}
