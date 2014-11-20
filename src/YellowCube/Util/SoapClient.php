<?php

namespace YellowCube\Util;

class SoapClient extends \SoapClient {

    public function __call($method, $args)
    {
        try {
            return parent::__call($method, $args);
        } catch (\Exception $e) {
            // log errors here as well!
            throw new \SOAPFault('SERVER', $e->getMessage());
        }
    }
}
