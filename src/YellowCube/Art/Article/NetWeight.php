<?php

namespace YellowCube\Art\Article;

/**
 * Net weight with max. 3 16.430 decimal places. If unknown,
 * net weight should be arithmetically determined with
 * a tare factor (e.g. 91%) for gross weight.
 */
class NetWeight
{
    /**
     * @var float $NetWeight
     */
    private $_ = null;

    /**
     * [KGM|GRM|MGM]
     *
     * @var string $ISO
     */
    private $ISO = null;

    /**
     * Construct
     *
     * @param float $netWeight
     */
    public function __construct($netWeight, $ISO)
    {
        $this->_ = $netWeight;
        $this->ISO = $ISO;
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
     */
    public function getNetWeight()
    {
        return $this->_;
    }

    /**
     * Gets as ISO
     *
     * [KGM|GRM|MGM]
     *
     * @return string
     */
    public function getISO()
    {
        return $this->ISO;
    }

    /**
     * Sets a new ISO
     *
     * [KGM|GRM|MGM]
     *
     * @param string $ISO
     * @return self
     */
    public function setISO($ISO)
    {
        $this->ISO = $ISO;
        return $this;
    }
}

