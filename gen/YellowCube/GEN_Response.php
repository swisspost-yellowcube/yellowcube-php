<?php

namespace YellowCube;

class GEN_Response
{

  /**
   * 
   * @var EventTimestamp $EventTimestamp
   */
  protected $EventTimestamp = null;

  /**
   * 
   * @var StatusCode $StatusCode
   */
  protected $StatusCode = null;

  /**
   * 
   * @var StatusText $StatusText
   */
  protected $StatusText = null;

  /**
   * 
   * @var Reference $Reference
   */
  protected $Reference = null;

  /**
   * 
   * @param EventTimestamp $EventTimestamp
   * @param StatusCode $StatusCode
   * @param StatusText $StatusText
   * @param Reference $Reference
   */
  public function __construct($EventTimestamp = null, $StatusCode = null, $StatusText = null, $Reference = null)
  {
    $this->EventTimestamp = $EventTimestamp;
    $this->StatusCode = $StatusCode;
    $this->StatusText = $StatusText;
    $this->Reference = $Reference;
  }

  /**
   * 
   * @return EventTimestamp
   */
  public function getEventTimestamp()
  {
    return $this->EventTimestamp;
  }

  /**
   * 
   * @param EventTimestamp $EventTimestamp
   * @return \YellowCube\GEN_Response
   */
  public function setEventTimestamp($EventTimestamp)
  {
    $this->EventTimestamp = $EventTimestamp;
    return $this;
  }

  /**
   * 
   * @return StatusCode
   */
  public function getStatusCode()
  {
    return $this->StatusCode;
  }

  /**
   * 
   * @param StatusCode $StatusCode
   * @return \YellowCube\GEN_Response
   */
  public function setStatusCode($StatusCode)
  {
    $this->StatusCode = $StatusCode;
    return $this;
  }

  /**
   * 
   * @return StatusText
   */
  public function getStatusText()
  {
    return $this->StatusText;
  }

  /**
   * 
   * @param StatusText $StatusText
   * @return \YellowCube\GEN_Response
   */
  public function setStatusText($StatusText)
  {
    $this->StatusText = $StatusText;
    return $this;
  }

  /**
   * 
   * @return Reference
   */
  public function getReference()
  {
    return $this->Reference;
  }

  /**
   * 
   * @param Reference $Reference
   * @return \YellowCube\GEN_Response
   */
  public function setReference($Reference)
  {
    $this->Reference = $Reference;
    return $this;
  }

}
