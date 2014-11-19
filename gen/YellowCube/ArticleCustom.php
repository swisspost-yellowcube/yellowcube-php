<?php

namespace YellowCube;

class ArticleCustom
{

  /**
   * 
   * @var ChangeFlag $ChangeFlag
   */
  protected $ChangeFlag = null;

  /**
   * 
   * @var DepositorNo $DepositorNo
   */
  protected $DepositorNo = null;

  /**
   * 
   * @var PlantID $PlantID
   */
  protected $PlantID = null;

  /**
   * 
   * @var ArticleNo $ArticleNo
   */
  protected $ArticleNo = null;

  /**
   * 
   * @var BaseUOM $BaseUOM
   */
  protected $BaseUOM = null;

  /**
   * 
   * @var NetWeight $NetWeight
   */
  protected $NetWeight = null;

  /**
   * 
   * @var BatchMngtReq $BatchMngtReq
   */
  protected $BatchMngtReq = null;

  /**
   * 
   * @var MinRemLife $MinRemLife
   */
  protected $MinRemLife = null;

  /**
   * 
   * @var PeriodExpDateType $PeriodExpDateType
   */
  protected $PeriodExpDateType = null;

  /**
   * 
   * @var SerialNoFlag $SerialNoFlag
   */
  protected $SerialNoFlag = null;

  /**
   * 
   * @var UnitsOfMeasure $UnitsOfMeasure
   */
  protected $UnitsOfMeasure = null;

  /**
   * 
   * @var ArticleDescriptions $ArticleDescriptions
   */
  protected $ArticleDescriptions = null;

  /**
   * 
   * @param ChangeFlag $ChangeFlag
   * @param DepositorNo $DepositorNo
   * @param PlantID $PlantID
   * @param ArticleNo $ArticleNo
   * @param BaseUOM $BaseUOM
   * @param NetWeight $NetWeight
   * @param BatchMngtReq $BatchMngtReq
   * @param MinRemLife $MinRemLife
   * @param PeriodExpDateType $PeriodExpDateType
   * @param SerialNoFlag $SerialNoFlag
   * @param UnitsOfMeasure $UnitsOfMeasure
   * @param ArticleDescriptions $ArticleDescriptions
   */
  public function __construct($ChangeFlag = null, $DepositorNo = null, $PlantID = null, $ArticleNo = null, $BaseUOM = null, $NetWeight = null, $BatchMngtReq = null, $MinRemLife = null, $PeriodExpDateType = null, $SerialNoFlag = null, $UnitsOfMeasure = null, $ArticleDescriptions = null)
  {
    $this->ChangeFlag = $ChangeFlag;
    $this->DepositorNo = $DepositorNo;
    $this->PlantID = $PlantID;
    $this->ArticleNo = $ArticleNo;
    $this->BaseUOM = $BaseUOM;
    $this->NetWeight = $NetWeight;
    $this->BatchMngtReq = $BatchMngtReq;
    $this->MinRemLife = $MinRemLife;
    $this->PeriodExpDateType = $PeriodExpDateType;
    $this->SerialNoFlag = $SerialNoFlag;
    $this->UnitsOfMeasure = $UnitsOfMeasure;
    $this->ArticleDescriptions = $ArticleDescriptions;
  }

  /**
   * 
   * @return ChangeFlag
   */
  public function getChangeFlag()
  {
    return $this->ChangeFlag;
  }

  /**
   * 
   * @param ChangeFlag $ChangeFlag
   * @return \YellowCube\Article
   */
  public function setChangeFlag($ChangeFlag)
  {
    $this->ChangeFlag = $ChangeFlag;
    return $this;
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
   * @return \YellowCube\Article
   */
  public function setDepositorNo($DepositorNo)
  {
    $this->DepositorNo = $DepositorNo;
    return $this;
  }

  /**
   * 
   * @return PlantID
   */
  public function getPlantID()
  {
    return $this->PlantID;
  }

  /**
   * 
   * @param PlantID $PlantID
   * @return \YellowCube\Article
   */
  public function setPlantID($PlantID)
  {
    $this->PlantID = $PlantID;
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
   * @return \YellowCube\Article
   */
  public function setArticleNo($ArticleNo)
  {
    $this->ArticleNo = $ArticleNo;
    return $this;
  }

  /**
   * 
   * @return BaseUOM
   */
  public function getBaseUOM()
  {
    return $this->BaseUOM;
  }

  /**
   * 
   * @param BaseUOM $BaseUOM
   * @return \YellowCube\Article
   */
  public function setBaseUOM($BaseUOM)
  {
    $this->BaseUOM = $BaseUOM;
    return $this;
  }

  /**
   * 
   * @return NetWeight
   */
  public function getNetWeight()
  {
    return $this->NetWeight;
  }

  /**
   * 
   * @param NetWeight $NetWeight
   * @return \YellowCube\Article
   */
  public function setNetWeight($NetWeight)
  {
    $this->NetWeight = $NetWeight;
    return $this;
  }

  /**
   * 
   * @return BatchMngtReq
   */
  public function getBatchMngtReq()
  {
    return $this->BatchMngtReq;
  }

  /**
   * 
   * @param BatchMngtReq $BatchMngtReq
   * @return \YellowCube\Article
   */
  public function setBatchMngtReq($BatchMngtReq)
  {
    $this->BatchMngtReq = $BatchMngtReq;
    return $this;
  }

  /**
   * 
   * @return MinRemLife
   */
  public function getMinRemLife()
  {
    return $this->MinRemLife;
  }

  /**
   * 
   * @param MinRemLife $MinRemLife
   * @return \YellowCube\Article
   */
  public function setMinRemLife($MinRemLife)
  {
    $this->MinRemLife = $MinRemLife;
    return $this;
  }

  /**
   * 
   * @return PeriodExpDateType
   */
  public function getPeriodExpDateType()
  {
    return $this->PeriodExpDateType;
  }

  /**
   * 
   * @param PeriodExpDateType $PeriodExpDateType
   * @return \YellowCube\Article
   */
  public function setPeriodExpDateType($PeriodExpDateType)
  {
    $this->PeriodExpDateType = $PeriodExpDateType;
    return $this;
  }

  /**
   * 
   * @return SerialNoFlag
   */
  public function getSerialNoFlag()
  {
    return $this->SerialNoFlag;
  }

  /**
   * 
   * @param SerialNoFlag $SerialNoFlag
   * @return \YellowCube\Article
   */
  public function setSerialNoFlag($SerialNoFlag)
  {
    $this->SerialNoFlag = $SerialNoFlag;
    return $this;
  }

  /**
   * 
   * @return UnitsOfMeasure
   */
  public function getUnitsOfMeasure()
  {
    return $this->UnitsOfMeasure;
  }

  /**
   * 
   * @param UnitsOfMeasure $UnitsOfMeasure
   * @return \YellowCube\Article
   */
  public function setUnitsOfMeasure($UnitsOfMeasure)
  {
    $this->UnitsOfMeasure = $UnitsOfMeasure;
    return $this;
  }

  /**
   * 
   * @return ArticleDescriptions
   */
  public function getArticleDescriptions()
  {
    return $this->ArticleDescriptions;
  }

  /**
   * 
   * @param ArticleDescriptions $ArticleDescriptions
   * @return \YellowCube\Article
   */
  public function setArticleDescriptions($ArticleDescriptions)
  {
    $this->ArticleDescriptions = $ArticleDescriptions;
    return $this;
  }

}
