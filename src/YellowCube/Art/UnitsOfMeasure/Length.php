<?php

namespace YellowCube\Art\UnitsOfMeasure;

class Length
{

  /**
   *
   * @var mixed $length
   */
  protected $length = null;

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
    $this->length = $_;
    $this->ISO = $ISO;
  }

  /**
   *
   * @return Float13v3
   */
  public function get_()
  {
    return $this->length;
  }

  /**
   *
   * @param Float13v3 $_
   * @return \YellowCube\API\Length
   */
  public function set_($_)
  {
    $this->length = $_;
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
   * @return \YellowCube\API\Length
   */
  public function setISO($ISO)
  {
    $this->ISO = $ISO;
    return $this;
  }

}
