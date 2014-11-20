<?php

namespace YellowCube\Art\UnitsOfMeasure;

class AlternateUnitISO
{
  /**
   *
   * @var string $_
   */
  protected $_ = null;

  /**
   *
   * @param string $_
   */
  public function __construct($_ = null)
  {
    $this->_ = $_;
  }

  /**
   * @return string
   */
  public function __toString()
  {
    return $this->_;
  }

  /**
   *
   * @param string $_
   */
  public function set_($_)
  {
    $this->_ = $_;
    return $this;
  }
}
