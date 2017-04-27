<?php

namespace YellowCube;

class GEN_STATUS
{
    /**
     *
     * @var ControlReference $ControlReference
     */
    protected $ControlReference = null;

    /**
     *
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     *
     * @param ControlReference $ControlReference
     * @param string $Reference
     */
    public function __construct($ControlReference = null, $Reference = null)
    {
        $this->ControlReference = $ControlReference;
        $this->Reference = $Reference;
    }

    /**
     *
     * @return ControlReference
     */
    public function getControlReference()
    {
        return $this->ControlReference;
    }

    /**
     *
     * @param ControlReference $ControlReference
     */
    public function setControlReference($ControlReference)
    {
        $this->ControlReference = $ControlReference;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param string $Reference
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }
}
