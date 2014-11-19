<?php

namespace YellowCube;

class QuantityUOM
{

  /**
   * 
   * @var Float13v3 $_
   */
  protected $_ = null;

  /**
   * 
   * @var anonymous129 $QuantityISO
   */
  protected $QuantityISO = null;

  /**
   * 
   * @param Float13v3 $_
   * @param anonymous129 $QuantityISO
   */
  public function __construct($_ = null, $QuantityISO = null)
  {
    $this->_ = $_;
    $this->QuantityISO = $QuantityISO;
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
   * @return \YellowCube\QuantityUOM
   */
  public function set_($_)
  {
    $this->_ = $_;
    return $this;
  }

  /**
   * 
   * @return anonymous129
   */
  public function getQuantityISO()
  {
    return $this->QuantityISO;
  }

  /**
   * 
   * @param anonymous129 $QuantityISO
   * @return \YellowCube\QuantityUOM
   */
  public function setQuantityISO($QuantityISO)
  {
    $this->QuantityISO = $QuantityISO;
    return $this;
  }

}
