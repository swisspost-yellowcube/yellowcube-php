<?php

namespace YellowCube;

class AdditionalService
{

  /**
   * 
   * @var BasicShippingServices $BasicShippingServices
   */
  protected $BasicShippingServices = null;

  /**
   * 
   * @var AdditionalShippingServices $AdditionalShippingServices
   */
  protected $AdditionalShippingServices = null;

  /**
   * 
   * @var DeliveryInstructions $DeliveryInstructions
   */
  protected $DeliveryInstructions = null;

  /**
   * 
   * @var FloorNo $FloorNo
   */
  protected $FloorNo = null;

  /**
   * 
   * @var NotificationType $NotificationType
   */
  protected $NotificationType = null;

  /**
   * 
   * @var NotificationServiceCode $NotificationServiceCode
   */
  protected $NotificationServiceCode = null;

  /**
   * 
   * @var DeliveryDate $DeliveryDate
   */
  protected $DeliveryDate = null;

  /**
   * 
   * @var DeliveryTimeJIT $DeliveryTimeJIT
   */
  protected $DeliveryTimeJIT = null;

  /**
   * 
   * @var DeliveryTimeFrom $DeliveryTimeFrom
   */
  protected $DeliveryTimeFrom = null;

  /**
   * 
   * @var DeliveryTimeTo $DeliveryTimeTo
   */
  protected $DeliveryTimeTo = null;

  /**
   * 
   * @var DeliveryPeriodeCode $DeliveryPeriodeCode
   */
  protected $DeliveryPeriodeCode = null;

  /**
   * 
   * @var DeliveryLocation $DeliveryLocation
   */
  protected $DeliveryLocation = null;

  /**
   * 
   * @var Float10v2 $CODAmount
   */
  protected $CODAmount = null;

  /**
   * 
   * @var CODAccountNo $CODAccountNo
   */
  protected $CODAccountNo = null;

  /**
   * 
   * @var CODRefNo $CODRefNo
   */
  protected $CODRefNo = null;

  /**
   * 
   * @var FrightShippingFlag $FrightShippingFlag
   */
  protected $FrightShippingFlag = null;

  /**
   * 
   * @var ShippingInterface $ShippingInterface
   */
  protected $ShippingInterface = null;

  /**
   * 
   * @param BasicShippingServices $BasicShippingServices
   * @param AdditionalShippingServices $AdditionalShippingServices
   * @param DeliveryInstructions $DeliveryInstructions
   * @param FloorNo $FloorNo
   * @param NotificationType $NotificationType
   * @param NotificationServiceCode $NotificationServiceCode
   * @param DeliveryDate $DeliveryDate
   * @param DeliveryTimeJIT $DeliveryTimeJIT
   * @param DeliveryTimeFrom $DeliveryTimeFrom
   * @param DeliveryTimeTo $DeliveryTimeTo
   * @param DeliveryPeriodeCode $DeliveryPeriodeCode
   * @param DeliveryLocation $DeliveryLocation
   * @param Float10v2 $CODAmount
   * @param CODAccountNo $CODAccountNo
   * @param CODRefNo $CODRefNo
   * @param FrightShippingFlag $FrightShippingFlag
   * @param ShippingInterface $ShippingInterface
   */
  public function __construct($BasicShippingServices = null, $AdditionalShippingServices = null, $DeliveryInstructions = null, $FloorNo = null, $NotificationType = null, $NotificationServiceCode = null, $DeliveryDate = null, $DeliveryTimeJIT = null, $DeliveryTimeFrom = null, $DeliveryTimeTo = null, $DeliveryPeriodeCode = null, $DeliveryLocation = null, $CODAmount = null, $CODAccountNo = null, $CODRefNo = null, $FrightShippingFlag = null, $ShippingInterface = null)
  {
    $this->BasicShippingServices = $BasicShippingServices;
    $this->AdditionalShippingServices = $AdditionalShippingServices;
    $this->DeliveryInstructions = $DeliveryInstructions;
    $this->FloorNo = $FloorNo;
    $this->NotificationType = $NotificationType;
    $this->NotificationServiceCode = $NotificationServiceCode;
    $this->DeliveryDate = $DeliveryDate;
    $this->DeliveryTimeJIT = $DeliveryTimeJIT;
    $this->DeliveryTimeFrom = $DeliveryTimeFrom;
    $this->DeliveryTimeTo = $DeliveryTimeTo;
    $this->DeliveryPeriodeCode = $DeliveryPeriodeCode;
    $this->DeliveryLocation = $DeliveryLocation;
    $this->CODAmount = $CODAmount;
    $this->CODAccountNo = $CODAccountNo;
    $this->CODRefNo = $CODRefNo;
    $this->FrightShippingFlag = $FrightShippingFlag;
    $this->ShippingInterface = $ShippingInterface;
  }

  /**
   * 
   * @return BasicShippingServices
   */
  public function getBasicShippingServices()
  {
    return $this->BasicShippingServices;
  }

  /**
   * 
   * @param BasicShippingServices $BasicShippingServices
   * @return \YellowCube\AdditionalService
   */
  public function setBasicShippingServices($BasicShippingServices)
  {
    $this->BasicShippingServices = $BasicShippingServices;
    return $this;
  }

  /**
   * 
   * @return AdditionalShippingServices
   */
  public function getAdditionalShippingServices()
  {
    return $this->AdditionalShippingServices;
  }

  /**
   * 
   * @param AdditionalShippingServices $AdditionalShippingServices
   * @return \YellowCube\AdditionalService
   */
  public function setAdditionalShippingServices($AdditionalShippingServices)
  {
    $this->AdditionalShippingServices = $AdditionalShippingServices;
    return $this;
  }

  /**
   * 
   * @return DeliveryInstructions
   */
  public function getDeliveryInstructions()
  {
    return $this->DeliveryInstructions;
  }

  /**
   * 
   * @param DeliveryInstructions $DeliveryInstructions
   * @return \YellowCube\AdditionalService
   */
  public function setDeliveryInstructions($DeliveryInstructions)
  {
    $this->DeliveryInstructions = $DeliveryInstructions;
    return $this;
  }

  /**
   * 
   * @return FloorNo
   */
  public function getFloorNo()
  {
    return $this->FloorNo;
  }

  /**
   * 
   * @param FloorNo $FloorNo
   * @return \YellowCube\AdditionalService
   */
  public function setFloorNo($FloorNo)
  {
    $this->FloorNo = $FloorNo;
    return $this;
  }

  /**
   * 
   * @return NotificationType
   */
  public function getNotificationType()
  {
    return $this->NotificationType;
  }

  /**
   * 
   * @param NotificationType $NotificationType
   * @return \YellowCube\AdditionalService
   */
  public function setNotificationType($NotificationType)
  {
    $this->NotificationType = $NotificationType;
    return $this;
  }

  /**
   * 
   * @return NotificationServiceCode
   */
  public function getNotificationServiceCode()
  {
    return $this->NotificationServiceCode;
  }

  /**
   * 
   * @param NotificationServiceCode $NotificationServiceCode
   * @return \YellowCube\AdditionalService
   */
  public function setNotificationServiceCode($NotificationServiceCode)
  {
    $this->NotificationServiceCode = $NotificationServiceCode;
    return $this;
  }

  /**
   * 
   * @return DeliveryDate
   */
  public function getDeliveryDate()
  {
    return $this->DeliveryDate;
  }

  /**
   * 
   * @param DeliveryDate $DeliveryDate
   * @return \YellowCube\AdditionalService
   */
  public function setDeliveryDate($DeliveryDate)
  {
    $this->DeliveryDate = $DeliveryDate;
    return $this;
  }

  /**
   * 
   * @return DeliveryTimeJIT
   */
  public function getDeliveryTimeJIT()
  {
    return $this->DeliveryTimeJIT;
  }

  /**
   * 
   * @param DeliveryTimeJIT $DeliveryTimeJIT
   * @return \YellowCube\AdditionalService
   */
  public function setDeliveryTimeJIT($DeliveryTimeJIT)
  {
    $this->DeliveryTimeJIT = $DeliveryTimeJIT;
    return $this;
  }

  /**
   * 
   * @return DeliveryTimeFrom
   */
  public function getDeliveryTimeFrom()
  {
    return $this->DeliveryTimeFrom;
  }

  /**
   * 
   * @param DeliveryTimeFrom $DeliveryTimeFrom
   * @return \YellowCube\AdditionalService
   */
  public function setDeliveryTimeFrom($DeliveryTimeFrom)
  {
    $this->DeliveryTimeFrom = $DeliveryTimeFrom;
    return $this;
  }

  /**
   * 
   * @return DeliveryTimeTo
   */
  public function getDeliveryTimeTo()
  {
    return $this->DeliveryTimeTo;
  }

  /**
   * 
   * @param DeliveryTimeTo $DeliveryTimeTo
   * @return \YellowCube\AdditionalService
   */
  public function setDeliveryTimeTo($DeliveryTimeTo)
  {
    $this->DeliveryTimeTo = $DeliveryTimeTo;
    return $this;
  }

  /**
   * 
   * @return DeliveryPeriodeCode
   */
  public function getDeliveryPeriodeCode()
  {
    return $this->DeliveryPeriodeCode;
  }

  /**
   * 
   * @param DeliveryPeriodeCode $DeliveryPeriodeCode
   * @return \YellowCube\AdditionalService
   */
  public function setDeliveryPeriodeCode($DeliveryPeriodeCode)
  {
    $this->DeliveryPeriodeCode = $DeliveryPeriodeCode;
    return $this;
  }

  /**
   * 
   * @return DeliveryLocation
   */
  public function getDeliveryLocation()
  {
    return $this->DeliveryLocation;
  }

  /**
   * 
   * @param DeliveryLocation $DeliveryLocation
   * @return \YellowCube\AdditionalService
   */
  public function setDeliveryLocation($DeliveryLocation)
  {
    $this->DeliveryLocation = $DeliveryLocation;
    return $this;
  }

  /**
   * 
   * @return Float10v2
   */
  public function getCODAmount()
  {
    return $this->CODAmount;
  }

  /**
   * 
   * @param Float10v2 $CODAmount
   * @return \YellowCube\AdditionalService
   */
  public function setCODAmount($CODAmount)
  {
    $this->CODAmount = $CODAmount;
    return $this;
  }

  /**
   * 
   * @return CODAccountNo
   */
  public function getCODAccountNo()
  {
    return $this->CODAccountNo;
  }

  /**
   * 
   * @param CODAccountNo $CODAccountNo
   * @return \YellowCube\AdditionalService
   */
  public function setCODAccountNo($CODAccountNo)
  {
    $this->CODAccountNo = $CODAccountNo;
    return $this;
  }

  /**
   * 
   * @return CODRefNo
   */
  public function getCODRefNo()
  {
    return $this->CODRefNo;
  }

  /**
   * 
   * @param CODRefNo $CODRefNo
   * @return \YellowCube\AdditionalService
   */
  public function setCODRefNo($CODRefNo)
  {
    $this->CODRefNo = $CODRefNo;
    return $this;
  }

  /**
   * 
   * @return FrightShippingFlag
   */
  public function getFrightShippingFlag()
  {
    return $this->FrightShippingFlag;
  }

  /**
   * 
   * @param FrightShippingFlag $FrightShippingFlag
   * @return \YellowCube\AdditionalService
   */
  public function setFrightShippingFlag($FrightShippingFlag)
  {
    $this->FrightShippingFlag = $FrightShippingFlag;
    return $this;
  }

  /**
   * 
   * @return ShippingInterface
   */
  public function getShippingInterface()
  {
    return $this->ShippingInterface;
  }

  /**
   * 
   * @param ShippingInterface $ShippingInterface
   * @return \YellowCube\AdditionalService
   */
  public function setShippingInterface($ShippingInterface)
  {
    $this->ShippingInterface = $ShippingInterface;
    return $this;
  }

}
