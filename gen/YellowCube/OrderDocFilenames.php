<?php

namespace YellowCube;

class OrderDocFilenames
{

  /**
   * 
   * @var OrderDocFilename $OrderDocFilename
   */
  protected $OrderDocFilename = null;

  /**
   * 
   * @param OrderDocFilename $OrderDocFilename
   */
  public function __construct($OrderDocFilename = null)
  {
    $this->OrderDocFilename = $OrderDocFilename;
  }

  /**
   * 
   * @return OrderDocFilename
   */
  public function getOrderDocFilename()
  {
    return $this->OrderDocFilename;
  }

  /**
   * 
   * @param OrderDocFilename $OrderDocFilename
   * @return \YellowCube\OrderDocFilenames
   */
  public function setOrderDocFilename($OrderDocFilename)
  {
    $this->OrderDocFilename = $OrderDocFilename;
    return $this;
  }

}
