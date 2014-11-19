<?php

namespace YellowCube;

class TransControlID
{

  /**
   * 
   * @var string $_
   */
  protected $_ = null;

  /**
   * 
   * @var anonymous10 $UniqueFlag
   */
  protected $UniqueFlag = null;

  /**
   * 
   * @param string $_
   * @param anonymous10 $UniqueFlag
   */
  public function __construct($_ = null, $UniqueFlag = null)
  {
    $this->_ = $_;
    $this->UniqueFlag = $UniqueFlag;
  }

  /**
   * 
   * @return string
   */
  public function get_()
  {
    return $this->_;
  }

  /**
   * 
   * @param string $_
   * @return \YellowCube\TransControlID
   */
  public function set_($_)
  {
    $this->_ = $_;
    return $this;
  }

  /**
   * 
   * @return anonymous10
   */
  public function getUniqueFlag()
  {
    return $this->UniqueFlag;
  }

  /**
   * 
   * @param anonymous10 $UniqueFlag
   * @return \YellowCube\TransControlID
   */
  public function setUniqueFlag($UniqueFlag)
  {
    $this->UniqueFlag = $UniqueFlag;
    return $this;
  }

}
