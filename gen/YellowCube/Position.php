<?php

namespace YellowCube;

class Position
{

  /**
   * 
   * @var PosNo $PosNo
   */
  protected $PosNo = null;

  /**
   * 
   * @var ArticleNo $ArticleNo
   */
  protected $ArticleNo = null;

  /**
   * 
   * @var EAN $EAN
   */
  protected $EAN = null;

  /**
   * 
   * @var YCLot $YCLot
   */
  protected $YCLot = null;

  /**
   * 
   * @var Lot $Lot
   */
  protected $Lot = null;

  /**
   * 
   * @var Plant $Plant
   */
  protected $Plant = null;

  /**
   * 
   * @var Float13v3 $Quantity
   */
  protected $Quantity = null;

  /**
   * 
   * @var QuantityISO $QuantityISO
   */
  protected $QuantityISO = null;

  /**
   * 
   * @var ShortDescription $ShortDescription
   */
  protected $ShortDescription = null;

  /**
   * 
   * @var PickingMessage $PickingMessage
   */
  protected $PickingMessage = null;

  /**
   * 
   * @var PickingMessageLC $PickingMessageLC
   */
  protected $PickingMessageLC = null;

  /**
   * 
   * @var ReturnReason $ReturnReason
   */
  protected $ReturnReason = null;

  /**
   * 
   * @param PosNo $PosNo
   * @param ArticleNo $ArticleNo
   * @param EAN $EAN
   * @param YCLot $YCLot
   * @param Lot $Lot
   * @param Plant $Plant
   * @param Float13v3 $Quantity
   * @param QuantityISO $QuantityISO
   * @param ShortDescription $ShortDescription
   * @param PickingMessage $PickingMessage
   * @param PickingMessageLC $PickingMessageLC
   * @param ReturnReason $ReturnReason
   */
  public function __construct($PosNo = null, $ArticleNo = null, $EAN = null, $YCLot = null, $Lot = null, $Plant = null, $Quantity = null, $QuantityISO = null, $ShortDescription = null, $PickingMessage = null, $PickingMessageLC = null, $ReturnReason = null)
  {
    $this->PosNo = $PosNo;
    $this->ArticleNo = $ArticleNo;
    $this->EAN = $EAN;
    $this->YCLot = $YCLot;
    $this->Lot = $Lot;
    $this->Plant = $Plant;
    $this->Quantity = $Quantity;
    $this->QuantityISO = $QuantityISO;
    $this->ShortDescription = $ShortDescription;
    $this->PickingMessage = $PickingMessage;
    $this->PickingMessageLC = $PickingMessageLC;
    $this->ReturnReason = $ReturnReason;
  }

  /**
   * 
   * @return PosNo
   */
  public function getPosNo()
  {
    return $this->PosNo;
  }

  /**
   * 
   * @param PosNo $PosNo
   * @return \YellowCube\Position
   */
  public function setPosNo($PosNo)
  {
    $this->PosNo = $PosNo;
    return $this;
  }

  /**
   * 
   * @return ArticleNo
   */
  public function getArticleNo()
  {
    return $this->ArticleNo;
  }

  /**
   * 
   * @param ArticleNo $ArticleNo
   * @return \YellowCube\Position
   */
  public function setArticleNo($ArticleNo)
  {
    $this->ArticleNo = $ArticleNo;
    return $this;
  }

  /**
   * 
   * @return EAN
   */
  public function getEAN()
  {
    return $this->EAN;
  }

  /**
   * 
   * @param EAN $EAN
   * @return \YellowCube\Position
   */
  public function setEAN($EAN)
  {
    $this->EAN = $EAN;
    return $this;
  }

  /**
   * 
   * @return YCLot
   */
  public function getYCLot()
  {
    return $this->YCLot;
  }

  /**
   * 
   * @param YCLot $YCLot
   * @return \YellowCube\Position
   */
  public function setYCLot($YCLot)
  {
    $this->YCLot = $YCLot;
    return $this;
  }

  /**
   * 
   * @return Lot
   */
  public function getLot()
  {
    return $this->Lot;
  }

  /**
   * 
   * @param Lot $Lot
   * @return \YellowCube\Position
   */
  public function setLot($Lot)
  {
    $this->Lot = $Lot;
    return $this;
  }

  /**
   * 
   * @return Plant
   */
  public function getPlant()
  {
    return $this->Plant;
  }

  /**
   * 
   * @param Plant $Plant
   * @return \YellowCube\Position
   */
  public function setPlant($Plant)
  {
    $this->Plant = $Plant;
    return $this;
  }

  /**
   * 
   * @return Float13v3
   */
  public function getQuantity()
  {
    return $this->Quantity;
  }

  /**
   * 
   * @param Float13v3 $Quantity
   * @return \YellowCube\Position
   */
  public function setQuantity($Quantity)
  {
    $this->Quantity = $Quantity;
    return $this;
  }

  /**
   * 
   * @return QuantityISO
   */
  public function getQuantityISO()
  {
    return $this->QuantityISO;
  }

  /**
   * 
   * @param QuantityISO $QuantityISO
   * @return \YellowCube\Position
   */
  public function setQuantityISO($QuantityISO)
  {
    $this->QuantityISO = $QuantityISO;
    return $this;
  }

  /**
   * 
   * @return ShortDescription
   */
  public function getShortDescription()
  {
    return $this->ShortDescription;
  }

  /**
   * 
   * @param ShortDescription $ShortDescription
   * @return \YellowCube\Position
   */
  public function setShortDescription($ShortDescription)
  {
    $this->ShortDescription = $ShortDescription;
    return $this;
  }

  /**
   * 
   * @return PickingMessage
   */
  public function getPickingMessage()
  {
    return $this->PickingMessage;
  }

  /**
   * 
   * @param PickingMessage $PickingMessage
   * @return \YellowCube\Position
   */
  public function setPickingMessage($PickingMessage)
  {
    $this->PickingMessage = $PickingMessage;
    return $this;
  }

  /**
   * 
   * @return PickingMessageLC
   */
  public function getPickingMessageLC()
  {
    return $this->PickingMessageLC;
  }

  /**
   * 
   * @param PickingMessageLC $PickingMessageLC
   * @return \YellowCube\Position
   */
  public function setPickingMessageLC($PickingMessageLC)
  {
    $this->PickingMessageLC = $PickingMessageLC;
    return $this;
  }

  /**
   * 
   * @return ReturnReason
   */
  public function getReturnReason()
  {
    return $this->ReturnReason;
  }

  /**
   * 
   * @param ReturnReason $ReturnReason
   * @return \YellowCube\Position
   */
  public function setReturnReason($ReturnReason)
  {
    $this->ReturnReason = $ReturnReason;
    return $this;
  }

}
