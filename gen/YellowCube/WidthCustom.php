<?php

namespace YellowCube;

class WidthCustom
{

  /**
   * 
   * @var Float13v3 $_
   */
  protected $_ = null;

  /**
   * 
   * @var ISO $ISO
   */
  protected $ISO = null;

  /**
   * 
   * @param Float13v3 $_
   * @param ISO $ISO
   */
  public function __construct($_ = null, $ISO = null)
  {
    $this->_ = $_;
    $this->ISO = $ISO;
  }

  /**
   * 
   * @return Float13v3
   */
  public function get_()
  {
    return $this->_;
  }

  /**
   * 
   * @param Float13v3 $_
   * @return \YellowCube\Width
   */
  public function set_($_)
  {
    $this->_ = $_;
    return $this;
  }

  /**
   * 
   * @return ISO
   */
  public function getISO()
  {
    return $this->ISO;
  }

  /**
   * 
   * @param ISO $ISO
   * @return \YellowCube\Width
   */
  public function setISO($ISO)
  {
    $this->ISO = $ISO;
    return $this;
  }

}
