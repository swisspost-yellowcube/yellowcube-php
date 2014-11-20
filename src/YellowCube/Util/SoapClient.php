<?php

namespace YellowCube\Util;

class SoapClient extends \SoapClient {

    public function __construct($wsdl, $options) {
        $defaultOptions = array(
            'soap_version' => SOAP_1_2,
            "features" => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap' => array(
                'ControlReference' => 'YellowCube\Api\Art\ControlReference'
            )
        );

        parent::__construct($wsdl, array_merge($defaultOptions, $options));
    }

    public function __call($method, $args)
    {
        var_dump($args);
        try {
            return parent::__call($method, $args);
        } catch (\Exception $e) {
            // log errors here as well!
            throw new \SOAPFault('SERVER', $e->getMessage());
        }
    }
}
