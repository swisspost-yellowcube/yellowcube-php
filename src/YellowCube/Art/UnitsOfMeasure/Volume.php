<?php

namespace YellowCube\Art\UnitsOfMeasure;

class Volume
{

  /**
   *
   * @var mixed $volume
   */
  protected $volume = null;

  /**
   *
   * @var ISO $ISO
   */
  protected $ISO = null;

  /**
   *
   * @param mixed $volume
   * @param ISO $ISO
   */
  public function __construct($volume = null, $ISO = null)
  {
    $this->volume = $volume;
    $this->ISO = $ISO;
  }

  /**
   *
   * @return mixed
   */
  public function getVolume()
  {
    return $this->volume;
  }

  /**
   *
   * @param mixed $volume
   * @return \YellowCube\API\Volume
   */
  public function setVolume($volume)
  {
    $this->volume = $volume;
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
   * @return \YellowCube\API\Volume
   */
  public function setISO($ISO)
  {
    $this->ISO = $ISO;
    return $this;
  }

}
