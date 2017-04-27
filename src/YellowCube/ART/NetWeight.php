<?php

namespace YellowCube\ART;

use YellowCube\ART\UnitsOfMeasure\Dimension;

/**
 * Net weight with max. 3 decimal places. If unknown,
 * net weight should be arithmetically determined with
 * a tare factor (e.g. 91%) for gross weight.
 */
class NetWeight extends Dimension
{
}
