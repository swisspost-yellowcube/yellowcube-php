<?php

namespace YellowCube\Art\UnitsOfMeasure;

class Width
{
  /**
   *
   * @var mixed $width
   */
  protected $width = null;

  /**
   * [MMT|CMT|MTR|...]
   *
   * @var ISO $ISO
   */
  protected $ISO = null;

  /**
   *
   * @param mixed $width
   * @param ISO $ISO
   */
  public function __construct($width = null, $ISO = null)
  {
    $this->width = $width;
    $this->ISO = $ISO;
  }

  /**
   * @return mixed
   */
  public function getWidth()
  {
    return $this->width;
  }

  /**
   *
   * @param mixed $width
   * @return \YellowCube\API\Width
   */
  public function setWidth($width)
  {
    $this->width = $width;
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
   * @return \YellowCube\API\Width
   */
  public function setISO($ISO)
  {
    $this->ISO = $ISO;
    return $this;
  }

}
