<?php

namespace YellowCube\WAB\AdditionalService;

use YellowCube\Util\SimpleValue;

class AdditionalShippingServices extends SimpleValue implements AdditionalService
{
    public function __construct($additionalService = '')
    {
        parent::__construct($additionalService);
    }
}
