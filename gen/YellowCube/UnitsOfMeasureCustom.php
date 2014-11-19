<?php

namespace YellowCube;

class UnitsOfMeasureCustom
{

  /**
   * 
   * @var EAN $EAN
   */
  protected $EAN = null;

  /**
   * 
   * @var AlternateUnitISO $AlternateUnitISO
   */
  protected $AlternateUnitISO = null;

  /**
   * 
   * @var AltNumeratorUOM $AltNumeratorUOM
   */
  protected $AltNumeratorUOM = null;

  /**
   * 
   * @var AltDenominatorUOM $AltDenominatorUOM
   */
  protected $AltDenominatorUOM = null;

  /**
   * 
   * @var GrossWeight $GrossWeight
   */
  protected $GrossWeight = null;

  /**
   * 
   * @var Length $Length
   */
  protected $Length = null;

  /**
   * 
   * @var Width $Width
   */
  protected $Width = null;

  /**
   * 
   * @var Height $Height
   */
  protected $Height = null;

  /**
   * 
   * @var Volume $Volume
   */
  protected $Volume = null;

  /**
   * 
   * @param EAN $EAN
   * @param AlternateUnitISO $AlternateUnitISO
   * @param AltNumeratorUOM $AltNumeratorUOM
   * @param AltDenominatorUOM $AltDenominatorUOM
   * @param GrossWeight $GrossWeight
   * @param Length $Length
   * @param Width $Width
   * @param Height $Height
   * @param Volume $Volume
   */
  public function __construct($EAN = null, $AlternateUnitISO = null, $AltNumeratorUOM = null, $AltDenominatorUOM = null, $GrossWeight = null, $Length = null, $Width = null, $Height = null, $Volume = null)
  {
    $this->EAN = $EAN;
    $this->AlternateUnitISO = $AlternateUnitISO;
    $this->AltNumeratorUOM = $AltNumeratorUOM;
    $this->AltDenominatorUOM = $AltDenominatorUOM;
    $this->GrossWeight = $GrossWeight;
    $this->Length = $Length;
    $this->Width = $Width;
    $this->Height = $Height;
    $this->Volume = $Volume;
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
   * @return \YellowCube\UnitsOfMeasure
   */
  public function setEAN($EAN)
  {
    $this->EAN = $EAN;
    return $this;
  }

  /**
   * 
   * @return AlternateUnitISO
   */
  public function getAlternateUnitISO()
  {
    return $this->AlternateUnitISO;
  }

  /**
   * 
   * @param AlternateUnitISO $AlternateUnitISO
   * @return \YellowCube\UnitsOfMeasure
   */
  public function setAlternateUnitISO($AlternateUnitISO)
  {
    $this->AlternateUnitISO = $AlternateUnitISO;
    return $this;
  }

  /**
   * 
   * @return AltNumeratorUOM
   */
  public function getAltNumeratorUOM()
  {
    return $this->AltNumeratorUOM;
  }

  /**
   * 
   * @param AltNumeratorUOM $AltNumeratorUOM
   * @return \YellowCube\UnitsOfMeasure
   */
  public function setAltNumeratorUOM($AltNumeratorUOM)
  {
    $this->AltNumeratorUOM = $AltNumeratorUOM;
    return $this;
  }

  /**
   * 
   * @return AltDenominatorUOM
   */
  public function getAltDenominatorUOM()
  {
    return $this->AltDenominatorUOM;
  }

  /**
   * 
   * @param AltDenominatorUOM $AltDenominatorUOM
   * @return \YellowCube\UnitsOfMeasure
   */
  public function setAltDenominatorUOM($AltDenominatorUOM)
  {
    $this->AltDenominatorUOM = $AltDenominatorUOM;
    return $this;
  }

  /**
   * 
   * @return GrossWeight
   */
  public function getGrossWeight()
  {
    return $this->GrossWeight;
  }

  /**
   * 
   * @param GrossWeight $GrossWeight
   * @return \YellowCube\UnitsOfMeasure
   */
  public function setGrossWeight($GrossWeight)
  {
    $this->GrossWeight = $GrossWeight;
    return $this;
  }

  /**
   * 
   * @return Length
   */
  public function getLength()
  {
    return $this->Length;
  }

  /**
   * 
   * @param Length $Length
   * @return \YellowCube\UnitsOfMeasure
   */
  public function setLength($Length)
  {
    $this->Length = $Length;
    return $this;
  }

  /**
   * 
   * @return Width
   */
  public function getWidth()
  {
    return $this->Width;
  }

  /**
   * 
   * @param Width $Width
   * @return \YellowCube\UnitsOfMeasure
   */
  public function setWidth($Width)
  {
    $this->Width = $Width;
    return $this;
  }

  /**
   * 
   * @return Height
   */
  public function getHeight()
  {
    return $this->Height;
  }

  /**
   * 
   * @param Height $Height
   * @return \YellowCube\UnitsOfMeasure
   */
  public function setHeight($Height)
  {
    $this->Height = $Height;
    return $this;
  }

  /**
   * 
   * @return Volume
   */
  public function getVolume()
  {
    return $this->Volume;
  }

  /**
   * 
   * @param Volume $Volume
   * @return \YellowCube\UnitsOfMeasure
   */
  public function setVolume($Volume)
  {
    $this->Volume = $Volume;
    return $this;
  }

}
