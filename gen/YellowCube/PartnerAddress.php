<?php

namespace YellowCube;

class PartnerAddress
{

  /**
   * 
   * @var Partner $Partner
   */
  protected $Partner = null;

  /**
   * 
   * @param Partner $Partner
   */
  public function __construct($Partner = null)
  {
    $this->Partner = $Partner;
  }

  /**
   * 
   * @return Partner
   */
  public function getPartner()
  {
    return $this->Partner;
  }

  /**
   * 
   * @param Partner $Partner
   * @return \YellowCube\PartnerAddress
   */
  public function setPartner($Partner)
  {
    $this->Partner = $Partner;
    return $this;
  }

}
