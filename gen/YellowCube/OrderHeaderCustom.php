<?php

namespace YellowCube;

class OrderHeaderCustom
{

  /**
   * 
   * @var DepositorNo $DepositorNo
   */
  protected $DepositorNo = null;

  /**
   * 
   * @var CustomerOrderNo $CustomerOrderNo
   */
  protected $CustomerOrderNo = null;

  /**
   * 
   * @var CustomerOrderDate $CustomerOrderDate
   */
  protected $CustomerOrderDate = null;

  /**
   * 
   * @param DepositorNo $DepositorNo
   * @param CustomerOrderNo $CustomerOrderNo
   * @param CustomerOrderDate $CustomerOrderDate
   */
  public function __construct($DepositorNo = null, $CustomerOrderNo = null, $CustomerOrderDate = null)
  {
    $this->DepositorNo = $DepositorNo;
    $this->CustomerOrderNo = $CustomerOrderNo;
    $this->CustomerOrderDate = $CustomerOrderDate;
  }

  /**
   * 
   * @return DepositorNo
   */
  public function getDepositorNo()
  {
    return $this->DepositorNo;
  }

  /**
   * 
   * @param DepositorNo $DepositorNo
   * @return \YellowCube\OrderHeader
   */
  public function setDepositorNo($DepositorNo)
  {
    $this->DepositorNo = $DepositorNo;
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
   * @return \YellowCube\OrderHeader
   */
  public function setCustomerOrderNo($CustomerOrderNo)
  {
    $this->CustomerOrderNo = $CustomerOrderNo;
    return $this;
  }

  /**
   * 
   * @return CustomerOrderDate
   */
  public function getCustomerOrderDate()
  {
    return $this->CustomerOrderDate;
  }

  /**
   * 
   * @param CustomerOrderDate $CustomerOrderDate
   * @return \YellowCube\OrderHeader
   */
  public function setCustomerOrderDate($CustomerOrderDate)
  {
    $this->CustomerOrderDate = $CustomerOrderDate;
    return $this;
  }

}
