<?php

namespace YellowCube;

class OrderPositions
{

  /**
   * 
   * @var Position $Position
   */
  protected $Position = null;

  /**
   * 
   * @param Position $Position
   */
  public function __construct($Position = null)
  {
    $this->Position = $Position;
  }

  /**
   * 
   * @return Position
   */
  public function getPosition()
  {
    return $this->Position;
  }

  /**
   * 
   * @param Position $Position
   * @return \YellowCube\OrderPositions
   */
  public function setPosition($Position)
  {
    $this->Position = $Position;
    return $this;
  }

}
