<?php

namespace YellowCube;

class WAR_ListCustom
{

  /**
   * 
   * @var WAR $WAR
   */
  protected $WAR = null;

  /**
   * 
   * @param WAR $WAR
   */
  public function __construct($WAR = null)
  {
    $this->WAR = $WAR;
  }

  /**
   * 
   * @return WAR
   */
  public function getWAR()
  {
    return $this->WAR;
  }

  /**
   * 
   * @param WAR $WAR
   * @return \YellowCube\WAR_List
   */
  public function setWAR($WAR)
  {
    $this->WAR = $WAR;
    return $this;
  }

}
