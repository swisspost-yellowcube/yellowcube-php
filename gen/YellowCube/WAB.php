<?php

namespace YellowCube;

class WAB
{

  /**
   * 
   * @var ControlReference $ControlReference
   */
  protected $ControlReference = null;

  /**
   * 
   * @var Order $Order
   */
  protected $Order = null;

  /**
   * 
   * @param ControlReference $ControlReference
   * @param Order $Order
   */
  public function __construct($ControlReference = null, $Order = null)
  {
    $this->ControlReference = $ControlReference;
    $this->Order = $Order;
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
   * @return \YellowCube\WAB
   */
  public function setControlReference($ControlReference)
  {
    $this->ControlReference = $ControlReference;
    return $this;
  }

  /**
   * 
   * @return Order
   */
  public function getOrder()
  {
    return $this->Order;
  }

  /**
   * 
   * @param Order $Order
   * @return \YellowCube\WAB
   */
  public function setOrder($Order)
  {
    $this->Order = $Order;
    return $this;
  }

}
