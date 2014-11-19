<?php

namespace YellowCube;

class WAR_Request
{

  /**
   * 
   * @var ControlReference $ControlReference
   */
  protected $ControlReference = null;

  /**
   * 
   * @var CustomerOrderNo $CustomerOrderNo
   */
  protected $CustomerOrderNo = null;

  /**
   * 
   * @param ControlReference $ControlReference
   * @param CustomerOrderNo $CustomerOrderNo
   */
  public function __construct($ControlReference = null, $CustomerOrderNo = null)
  {
    $this->ControlReference = $ControlReference;
    $this->CustomerOrderNo = $CustomerOrderNo;
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
   * @return \YellowCube\WAR_Request
   */
  public function setControlReference($ControlReference)
  {
    $this->ControlReference = $ControlReference;
    return $this;
  }

  /**
   * 
   * @return CustomerOrderNo
   */
  public function getCustomerOrderNo()
  {
    return $this->CustomerOrderNo;
  }

  /**
   * 
   * @param CustomerOrderNo $CustomerOrderNo
   * @return \YellowCube\WAR_Request
   */
  public function setCustomerOrderNo($CustomerOrderNo)
  {
    $this->CustomerOrderNo = $CustomerOrderNo;
    return $this;
  }

}
