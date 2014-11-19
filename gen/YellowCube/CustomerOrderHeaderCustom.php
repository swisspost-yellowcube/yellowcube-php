<?php

namespace YellowCube;

class CustomerOrderHeaderCustom
{

  /**
   * 
   * @var YCDeliveryNo $YCDeliveryNo
   */
  protected $YCDeliveryNo = null;

  /**
   * 
   * @var YCDeliveryDate $YCDeliveryDate
   */
  protected $YCDeliveryDate = null;

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
   * @var PostalShipmentNo $PostalShipmentNo
   */
  protected $PostalShipmentNo = null;

  /**
   * 
   * @var PartnerReference $PartnerReference
   */
  protected $PartnerReference = null;

  /**
   * 
   * @param YCDeliveryNo $YCDeliveryNo
   * @param YCDeliveryDate $YCDeliveryDate
   * @param CustomerOrderNo $CustomerOrderNo
   * @param CustomerOrderDate $CustomerOrderDate
   * @param PostalShipmentNo $PostalShipmentNo
   * @param PartnerReference $PartnerReference
   */
  public function __construct($YCDeliveryNo = null, $YCDeliveryDate = null, $CustomerOrderNo = null, $CustomerOrderDate = null, $PostalShipmentNo = null, $PartnerReference = null)
  {
    $this->YCDeliveryNo = $YCDeliveryNo;
    $this->YCDeliveryDate = $YCDeliveryDate;
    $this->CustomerOrderNo = $CustomerOrderNo;
    $this->CustomerOrderDate = $CustomerOrderDate;
    $this->PostalShipmentNo = $PostalShipmentNo;
    $this->PartnerReference = $PartnerReference;
  }

  /**
   * 
   * @return YCDeliveryNo
   */
  public function getYCDeliveryNo()
  {
    return $this->YCDeliveryNo;
  }

  /**
   * 
   * @param YCDeliveryNo $YCDeliveryNo
   * @return \YellowCube\CustomerOrderHeader
   */
  public function setYCDeliveryNo($YCDeliveryNo)
  {
    $this->YCDeliveryNo = $YCDeliveryNo;
    return $this;
  }

  /**
   * 
   * @return YCDeliveryDate
   */
  public function getYCDeliveryDate()
  {
    return $this->YCDeliveryDate;
  }

  /**
   * 
   * @param YCDeliveryDate $YCDeliveryDate
   * @return \YellowCube\CustomerOrderHeader
   */
  public function setYCDeliveryDate($YCDeliveryDate)
  {
    $this->YCDeliveryDate = $YCDeliveryDate;
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
   * @return \YellowCube\CustomerOrderHeader
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
   * @return \YellowCube\CustomerOrderHeader
   */
  public function setCustomerOrderDate($CustomerOrderDate)
  {
    $this->CustomerOrderDate = $CustomerOrderDate;
    return $this;
  }

  /**
   * 
   * @return PostalShipmentNo
   */
  public function getPostalShipmentNo()
  {
    return $this->PostalShipmentNo;
  }

  /**
   * 
   * @param PostalShipmentNo $PostalShipmentNo
   * @return \YellowCube\CustomerOrderHeader
   */
  public function setPostalShipmentNo($PostalShipmentNo)
  {
    $this->PostalShipmentNo = $PostalShipmentNo;
    return $this;
  }

  /**
   * 
   * @return PartnerReference
   */
  public function getPartnerReference()
  {
    return $this->PartnerReference;
  }

  /**
   * 
   * @param PartnerReference $PartnerReference
   * @return \YellowCube\CustomerOrderHeader
   */
  public function setPartnerReference($PartnerReference)
  {
    $this->PartnerReference = $PartnerReference;
    return $this;
  }

}
