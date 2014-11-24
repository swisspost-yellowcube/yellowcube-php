<?php

namespace YellowCube\Art\UnitsOfMeasure;

use YellowCube\Util\SimpleValue;

class AltNumeratorUOM extends SimpleValue implements UnitOfMeasure
{
    public function __construct($numerator) {
        parent::__construct((string) $numerator);
    }
}
