<?php

namespace YellowCube;

class BAR_RequestCustom
{

  /**
   * 
   * @var ControlReference $ControlReference
   */
  protected $ControlReference = null;

  /**
   * 
   * @param ControlReference $ControlReference
   */
  public function __construct($ControlReference = null)
  {
    $this->ControlReference = $ControlReference;
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
   * @return \YellowCube\BAR_Request
   */
  public function setControlReference($ControlReference)
  {
    $this->ControlReference = $ControlReference;
    return $this;
  }

}
