<?php

namespace YellowCube;

class EANCustom
{

  /**
   * 
   * @var EANvalue $_
   */
  protected $_ = null;

  /**
   * 
   * @var anonymous157 $EANType
   */
  protected $EANType = null;

  /**
   * 
   * @param EANvalue $_
   * @param anonymous157 $EANType
   */
  public function __construct($_ = null, $EANType = null)
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
   * @return \YellowCube\EAN
   */
  public function set_($_)
  {
    $this->_ = $_;
    return $this;
  }

  /**
   * 
   * @return anonymous157
   */
  public function getEANType()
  {
    return $this->EANType;
  }

  /**
   * 
   * @param anonymous157 $EANType
   * @return \YellowCube\EAN
   */
  public function setEANType($EANType)
  {
    $this->EANType = $EANType;
    return $this;
  }

}
