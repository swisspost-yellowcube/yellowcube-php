<?php

namespace YellowCube;

class ValueAddedServicesCustom
{

  /**
   * 
   * @var AdditionalService $AdditionalService
   */
  protected $AdditionalService = null;

  /**
   * 
   * @param AdditionalService $AdditionalService
   */
  public function __construct($AdditionalService = null)
  {
    $this->AdditionalService = $AdditionalService;
  }

  /**
   * 
   * @return AdditionalService
   */
  public function getAdditionalService()
  {
    return $this->AdditionalService;
  }

  /**
   * 
   * @param AdditionalService $AdditionalService
   * @return \YellowCube\ValueAddedServices
   */
  public function setAdditionalService($AdditionalService)
  {
    $this->AdditionalService = $AdditionalService;
    return $this;
  }

}
