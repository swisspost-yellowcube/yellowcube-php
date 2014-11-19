<?php

namespace YellowCube;

class OrderCustom
{

  /**
   * 
   * @var OrderHeader $OrderHeader
   */
  protected $OrderHeader = null;

  /**
   * 
   * @var PartnerAddress $PartnerAddress
   */
  protected $PartnerAddress = null;

  /**
   * 
   * @var ValueAddedServices $ValueAddedServices
   */
  protected $ValueAddedServices = null;

  /**
   * 
   * @var OrderPositions $OrderPositions
   */
  protected $OrderPositions = null;

  /**
   * 
   * @var OrderDocuments $OrderDocuments
   */
  protected $OrderDocuments = null;

  /**
   * 
   * @param OrderHeader $OrderHeader
   * @param PartnerAddress $PartnerAddress
   * @param ValueAddedServices $ValueAddedServices
   * @param OrderPositions $OrderPositions
   * @param OrderDocuments $OrderDocuments
   */
  public function __construct($OrderHeader = null, $PartnerAddress = null, $ValueAddedServices = null, $OrderPositions = null, $OrderDocuments = null)
  {
    $this->OrderHeader = $OrderHeader;
    $this->PartnerAddress = $PartnerAddress;
    $this->ValueAddedServices = $ValueAddedServices;
    $this->OrderPositions = $OrderPositions;
    $this->OrderDocuments = $OrderDocuments;
  }

  /**
   * 
   * @return OrderHeader
   */
  public function getOrderHeader()
  {
    return $this->OrderHeader;
  }

  /**
   * 
   * @param OrderHeader $OrderHeader
   * @return \YellowCube\Order
   */
  public function setOrderHeader($OrderHeader)
  {
    $this->OrderHeader = $OrderHeader;
    return $this;
  }

  /**
   * 
   * @return PartnerAddress
   */
  public function getPartnerAddress()
  {
    return $this->PartnerAddress;
  }

  /**
   * 
   * @param PartnerAddress $PartnerAddress
   * @return \YellowCube\Order
   */
  public function setPartnerAddress($PartnerAddress)
  {
    $this->PartnerAddress = $PartnerAddress;
    return $this;
  }

  /**
   * 
   * @return ValueAddedServices
   */
  public function getValueAddedServices()
  {
    return $this->ValueAddedServices;
  }

  /**
   * 
   * @param ValueAddedServices $ValueAddedServices
   * @return \YellowCube\Order
   */
  public function setValueAddedServices($ValueAddedServices)
  {
    $this->ValueAddedServices = $ValueAddedServices;
    return $this;
  }

  /**
   * 
   * @return OrderPositions
   */
  public function getOrderPositions()
  {
    return $this->OrderPositions;
  }

  /**
   * 
   * @param OrderPositions $OrderPositions
   * @return \YellowCube\Order
   */
  public function setOrderPositions($OrderPositions)
  {
    $this->OrderPositions = $OrderPositions;
    return $this;
  }

  /**
   * 
   * @return OrderDocuments
   */
  public function getOrderDocuments()
  {
    return $this->OrderDocuments;
  }

  /**
   * 
   * @param OrderDocuments $OrderDocuments
   * @return \YellowCube\Order
   */
  public function setOrderDocuments($OrderDocuments)
  {
    $this->OrderDocuments = $OrderDocuments;
    return $this;
  }

}
