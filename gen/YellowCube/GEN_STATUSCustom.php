<?php

namespace YellowCube;

class GEN_STATUSCustom
{

  /**
   * 
   * @var ControlReference $ControlReference
   */
  protected $ControlReference = null;

  /**
   * 
   * @var Reference $Reference
   */
  protected $Reference = null;

  /**
   * 
   * @param ControlReference $ControlReference
   * @param Reference $Reference
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
   * @return \YellowCube\GEN_STATUS
   */
  public function setControlReference($ControlReference)
  {
    $this->ControlReference = $ControlReference;
    return $this;
  }

  /**
   * 
   * @return Reference
   */
  public function getReference()
  {
    return $this->Reference;
  }

  /**
   * 
   * @param Reference $Reference
   * @return \YellowCube\GEN_STATUS
   */
  public function setReference($Reference)
  {
    $this->Reference = $Reference;
    return $this;
  }

}
