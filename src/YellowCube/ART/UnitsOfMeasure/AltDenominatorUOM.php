<?php

namespace YellowCube\ART\UnitsOfMeasure;

use YellowCube\Util\SimpleValue;

class AltDenominatorUOM extends SimpleValue implements UnitOfMeasure
{
    public function __construct($denominator)
    {
        parent::__construct((string) $denominator);
    }
}
