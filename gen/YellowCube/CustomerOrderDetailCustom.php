<?php

namespace YellowCube;

class CustomerOrderDetailCustom
{

  /**
   * 
   * @var BVPosNo $BVPosNo
   */
  protected $BVPosNo = null;

  /**
   * 
   * @var CustomerOrderPosNo $CustomerOrderPosNo
   */
  protected $CustomerOrderPosNo = null;

  /**
   * 
   * @var YCArticleNo $YCArticleNo
   */
  protected $YCArticleNo = null;

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
   * @var StorageLocation $StorageLocation
   */
  protected $StorageLocation = null;

  /**
   * 
   * @var TransactionType $TransactionType
   */
  protected $TransactionType = null;

  /**
   * 
   * @var StockType $StockType
   */
  protected $StockType = null;

  /**
   * 
   * @var QuantityUOM $QuantityUOM
   */
  protected $QuantityUOM = null;

  /**
   * 
   * @var ReturnReason $ReturnReason
   */
  protected $ReturnReason = null;

  /**
   * 
   * @var SerialNumbers $SerialNumbers
   */
  protected $SerialNumbers = null;

  /**
   * 
   * @param BVPosNo $BVPosNo
   * @param CustomerOrderPosNo $CustomerOrderPosNo
   * @param YCArticleNo $YCArticleNo
   * @param ArticleNo $ArticleNo
   * @param EAN $EAN
   * @param Lot $Lot
   * @param Plant $Plant
   * @param StorageLocation $StorageLocation
   * @param TransactionType $TransactionType
   * @param StockType $StockType
   * @param QuantityUOM $QuantityUOM
   * @param ReturnReason $ReturnReason
   * @param SerialNumbers $SerialNumbers
   */
  public function __construct($BVPosNo = null, $CustomerOrderPosNo = null, $YCArticleNo = null, $ArticleNo = null, $EAN = null, $Lot = null, $Plant = null, $StorageLocation = null, $TransactionType = null, $StockType = null, $QuantityUOM = null, $ReturnReason = null, $SerialNumbers = null)
  {
    $this->BVPosNo = $BVPosNo;
    $this->CustomerOrderPosNo = $CustomerOrderPosNo;
    $this->YCArticleNo = $YCArticleNo;
    $this->ArticleNo = $ArticleNo;
    $this->EAN = $EAN;
    $this->Lot = $Lot;
    $this->Plant = $Plant;
    $this->StorageLocation = $StorageLocation;
    $this->TransactionType = $TransactionType;
    $this->StockType = $StockType;
    $this->QuantityUOM = $QuantityUOM;
    $this->ReturnReason = $ReturnReason;
    $this->SerialNumbers = $SerialNumbers;
  }

  /**
   * 
   * @return BVPosNo
   */
  public function getBVPosNo()
  {
    return $this->BVPosNo;
  }

  /**
   * 
   * @param BVPosNo $BVPosNo
   * @return \YellowCube\CustomerOrderDetail
   */
  public function setBVPosNo($BVPosNo)
  {
    $this->BVPosNo = $BVPosNo;
    return $this;
  }

  /**
   * 
   * @return CustomerOrderPosNo
   */
  public function getCustomerOrderPosNo()
  {
    return $this->CustomerOrderPosNo;
  }

  /**
   * 
   * @param CustomerOrderPosNo $CustomerOrderPosNo
   * @return \YellowCube\CustomerOrderDetail
   */
  public function setCustomerOrderPosNo($CustomerOrderPosNo)
  {
    $this->CustomerOrderPosNo = $CustomerOrderPosNo;
    return $this;
  }

  /**
   * 
   * @return YCArticleNo
   */
  public function getYCArticleNo()
  {
    return $this->YCArticleNo;
  }

  /**
   * 
   * @param YCArticleNo $YCArticleNo
   * @return \YellowCube\CustomerOrderDetail
   */
  public function setYCArticleNo($YCArticleNo)
  {
    $this->YCArticleNo = $YCArticleNo;
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
   * @return \YellowCube\CustomerOrderDetail
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
   * @return \YellowCube\CustomerOrderDetail
   */
  public function setEAN($EAN)
  {
    $this->EAN = $EAN;
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
   * @return \YellowCube\CustomerOrderDetail
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
   * @return \YellowCube\CustomerOrderDetail
   */
  public function setPlant($Plant)
  {
    $this->Plant = $Plant;
    return $this;
  }

  /**
   * 
   * @return StorageLocation
   */
  public function getStorageLocation()
  {
    return $this->StorageLocation;
  }

  /**
   * 
   * @param StorageLocation $StorageLocation
   * @return \YellowCube\CustomerOrderDetail
   */
  public function setStorageLocation($StorageLocation)
  {
    $this->StorageLocation = $StorageLocation;
    return $this;
  }

  /**
   * 
   * @return TransactionType
   */
  public function getTransactionType()
  {
    return $this->TransactionType;
  }

  /**
   * 
   * @param TransactionType $TransactionType
   * @return \YellowCube\CustomerOrderDetail
   */
  public function setTransactionType($TransactionType)
  {
    $this->TransactionType = $TransactionType;
    return $this;
  }

  /**
   * 
   * @return StockType
   */
  public function getStockType()
  {
    return $this->StockType;
  }

  /**
   * 
   * @param StockType $StockType
   * @return \YellowCube\CustomerOrderDetail
   */
  public function setStockType($StockType)
  {
    $this->StockType = $StockType;
    return $this;
  }

  /**
   * 
   * @return QuantityUOM
   */
  public function getQuantityUOM()
  {
    return $this->QuantityUOM;
  }

  /**
   * 
   * @param QuantityUOM $QuantityUOM
   * @return \YellowCube\CustomerOrderDetail
   */
  public function setQuantityUOM($QuantityUOM)
  {
    $this->QuantityUOM = $QuantityUOM;
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
   * @return \YellowCube\CustomerOrderDetail
   */
  public function setReturnReason($ReturnReason)
  {
    $this->ReturnReason = $ReturnReason;
    return $this;
  }

  /**
   * 
   * @return SerialNumbers
   */
  public function getSerialNumbers()
  {
    return $this->SerialNumbers;
  }

  /**
   * 
   * @param SerialNumbers $SerialNumbers
   * @return \YellowCube\CustomerOrderDetail
   */
  public function setSerialNumbers($SerialNumbers)
  {
    $this->SerialNumbers = $SerialNumbers;
    return $this;
  }

}
