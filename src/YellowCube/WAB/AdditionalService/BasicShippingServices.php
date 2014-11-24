<?php

namespace YellowCube\WAB\AdditionalService;

use YellowCube\Util\SimpleValue;

class BasicShippingServices extends SimpleValue implements AdditionalService
{
    const ECO = 'ECO';
    const LKW_ECO = 'LKW ECO';
    const LKW_EXPRESS = 'LKW EXPRESS';
    const LKW_PRIO = 'LKW PRIO';
    const PICKUP = 'PICKUP';
    const PPR = 'PPR';
    const PRI = 'PRI';
    const RETOURE = 'RETOURE';
    const RET = 'RETURN';
    const SEM = 'SEM';
    const SKB = 'SKB';
    const SP_ECO = 'SP ECO';
    const SP_PRI = 'SP PRI';
    const SP_SEM = 'SP SEM';
    const SP_SKB = 'SP SKB';
    const VL = 'VL';
}
