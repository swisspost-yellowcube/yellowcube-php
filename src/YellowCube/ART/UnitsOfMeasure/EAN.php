<?php

namespace YellowCube\ART\UnitsOfMeasure;

use YellowCube\Util\SimpleValue;

class EAN extends SimpleValue implements UnitOfMeasure
{
    /**
     * @var string $EANType
     */
    public $EANType = null;

    /**
     * @param string $EAN
     * @param string $EANType
     */
    public function __construct($EAN, $EANType = null)
    {
        parent::__construct($EAN);
        $this->EANType = $EANType;
    }

    /**
     * @return string
     */
    public function getEANType()
    {
        return $this->EANType;
    }

    /**
     * @param string $EANType
     */
    public function setEANType($EANType)
    {
        $this->EANType = $EANType;
        return $this;
    }
}
