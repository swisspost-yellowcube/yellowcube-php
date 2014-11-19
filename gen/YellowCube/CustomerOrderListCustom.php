<?php

namespace YellowCube;

class CustomerOrderListCustom
{

  /**
   * 
   * @var CustomerOrderDetail $CustomerOrderDetail
   */
  protected $CustomerOrderDetail = null;

  /**
   * 
   * @param CustomerOrderDetail $CustomerOrderDetail
   */
  public function __construct($CustomerOrderDetail = null)
  {
    $this->CustomerOrderDetail = $CustomerOrderDetail;
  }

  /**
   * 
   * @return CustomerOrderDetail
   */
  public function getCustomerOrderDetail()
  {
    return $this->CustomerOrderDetail;
  }

  /**
   * 
   * @param CustomerOrderDetail $CustomerOrderDetail
   * @return \YellowCube\CustomerOrderList
   */
  public function setCustomerOrderDetail($CustomerOrderDetail)
  {
    $this->CustomerOrderDetail = $CustomerOrderDetail;
    return $this;
  }

}
