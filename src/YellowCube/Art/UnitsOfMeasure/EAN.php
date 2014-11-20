<?php

namespace YellowCube\Art\UnitsOfMeasure;

class EAN
{

  /**
   *
   * @var EANvalue $_
   */
  public $_ = null;

  /**
   *
   * @var anonymous160 $EANType
   */
    public $EANType = null;

  /**
   *
   * @param EANvalue $_
   * @param anonymous160 $EANType
   */
  public function __construct($_, $EANType = null)
  {
    $this->_ = $_;
    $this->EANType = $EANType;
  }

  /**
   *
   * @return EANvalue
   */
  public function get_()
  {
    return $this->_;
  }

  /**
   *
   * @param EANvalue $_
   * @return \YellowCube\API\EAN
   */
  public function set_($_)
  {
    $this->_ = $_;
    return $this;
  }

  /**
   *
   * @return anonymous160
   */
  public function getEANType()
  {
    return $this->EANType;
  }

  /**
   *
   * @param anonymous160 $EANType
   * @return \YellowCube\API\EAN
   */
  public function setEANType($EANType)
  {
    $this->EANType = $EANType;
    return $this;
  }

}
