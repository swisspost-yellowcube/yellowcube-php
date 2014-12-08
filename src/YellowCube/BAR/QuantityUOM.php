<?php

namespace YellowCube\BAR;

use YellowCube\Util\SimpleValue;

class QuantityUOM extends SimpleValue
{
    /**
     * @var string
     */
    protected $QuantityISO = null;

    /**
     * @return string
     */
    public function getQuantityISO()
    {
        return $this->QuantityISO;
    }
}
