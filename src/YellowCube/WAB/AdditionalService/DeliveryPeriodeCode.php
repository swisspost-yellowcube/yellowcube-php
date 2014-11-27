<?php

namespace YellowCube\WAB\AdditionalService;

use YellowCube\Util\SimpleValue;

class DeliveryPeriodeCode extends SimpleValue implements AdditionalService
{
    const MORNING = '1';
    const AFTERNOON = '2';
    const BOTH = '3';
}
