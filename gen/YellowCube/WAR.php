<?php

namespace YellowCube;

class WAR
{

  /**
   * 
   * @var ControlReference $ControlReference
   */
  protected $ControlReference = null;

  /**
   * 
   * @var GoodsIssue $GoodsIssue
   */
  protected $GoodsIssue = null;

  /**
   * 
   * @param ControlReference $ControlReference
   * @param GoodsIssue $GoodsIssue
   */
  public function __construct($ControlReference = null, $GoodsIssue = null)
  {
    $this->ControlReference = $ControlReference;
    $this->GoodsIssue = $GoodsIssue;
  }

  /**
   * 
   * @return ControlReference
   */
  public function getControlReference()
  {
    return $this->ControlReference;
  }

  /**
   * 
   * @param ControlReference $ControlReference
   * @return \YellowCube\WAR
   */
  public function setControlReference($ControlReference)
  {
    $this->ControlReference = $ControlReference;
    return $this;
  }

  /**
   * 
   * @return GoodsIssue
   */
  public function getGoodsIssue()
  {
    return $this->GoodsIssue;
  }

  /**
   * 
   * @param GoodsIssue $GoodsIssue
   * @return \YellowCube\WAR
   */
  public function setGoodsIssue($GoodsIssue)
  {
    $this->GoodsIssue = $GoodsIssue;
    return $this;
  }

}
