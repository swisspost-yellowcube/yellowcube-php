<?php

namespace YellowCube\ART\UnitsOfMeasure;

use YellowCube\Util\SimpleValue;

abstract class Dimension extends SimpleValue implements UnitOfMeasure
{
    /**
     * @var string $ISO
     */
    protected $ISO = null;

    /**
     * @param mixed $dimension
     * @param ISO $ISO
     */
    public function __construct($dimension, $ISO)
    {
        parent::__construct($dimension);
        $this->ISO = $ISO;
    }

    /**
     * @return string ISO
     */
    public function getISO()
    {
        return $this->ISO;
    }

    /**
     * @param string $ISO
     */
    public function setISO($ISO)
    {
        $this->ISO = $ISO;
        return $this;
    }
}
