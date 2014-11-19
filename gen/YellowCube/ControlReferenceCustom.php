<?php

namespace YellowCube;

class ControlReferenceCustom
{

  /**
   * 
   * @var Type $Type
   */
  protected $Type = null;

  /**
   * 
   * @var Sender $Sender
   */
  protected $Sender = null;

  /**
   * 
   * @var Receiver $Receiver
   */
  protected $Receiver = null;

  /**
   * 
   * @var Timestamp $Timestamp
   */
  protected $Timestamp = null;

  /**
   * 
   * @var OperatingMode $OperatingMode
   */
  protected $OperatingMode = null;

  /**
   * 
   * @var Version $Version
   */
  protected $Version = null;

  /**
   * 
   * @var CommType $CommType
   */
  protected $CommType = null;

  /**
   * 
   * @var TransControlID $TransControlID
   */
  protected $TransControlID = null;

  /**
   * 
   * @var TransMaxWait $TransMaxWait
   */
  protected $TransMaxWait = null;

  /**
   * 
   * @param Type $Type
   * @param Sender $Sender
   * @param Receiver $Receiver
   * @param Timestamp $Timestamp
   * @param OperatingMode $OperatingMode
   * @param Version $Version
   * @param CommType $CommType
   * @param TransControlID $TransControlID
   * @param TransMaxWait $TransMaxWait
   */
  public function __construct($Type = null, $Sender = null, $Receiver = null, $Timestamp = null, $OperatingMode = null, $Version = null, $CommType = null, $TransControlID = null, $TransMaxWait = null)
  {
    $this->Type = $Type;
    $this->Sender = $Sender;
    $this->Receiver = $Receiver;
    $this->Timestamp = $Timestamp;
    $this->OperatingMode = $OperatingMode;
    $this->Version = $Version;
    $this->CommType = $CommType;
    $this->TransControlID = $TransControlID;
    $this->TransMaxWait = $TransMaxWait;
  }

  /**
   * 
   * @return Type
   */
  public function getType()
  {
    return $this->Type;
  }

  /**
   * 
   * @param Type $Type
   * @return \YellowCube\ControlReference
   */
  public function setType($Type)
  {
    $this->Type = $Type;
    return $this;
  }

  /**
   * 
   * @return Sender
   */
  public function getSender()
  {
    return $this->Sender;
  }

  /**
   * 
   * @param Sender $Sender
   * @return \YellowCube\ControlReference
   */
  public function setSender($Sender)
  {
    $this->Sender = $Sender;
    return $this;
  }

  /**
   * 
   * @return Receiver
   */
  public function getReceiver()
  {
    return $this->Receiver;
  }

  /**
   * 
   * @param Receiver $Receiver
   * @return \YellowCube\ControlReference
   */
  public function setReceiver($Receiver)
  {
    $this->Receiver = $Receiver;
    return $this;
  }

  /**
   * 
   * @return Timestamp
   */
  public function getTimestamp()
  {
    return $this->Timestamp;
  }

  /**
   * 
   * @param Timestamp $Timestamp
   * @return \YellowCube\ControlReference
   */
  public function setTimestamp($Timestamp)
  {
    $this->Timestamp = $Timestamp;
    return $this;
  }

  /**
   * 
   * @return OperatingMode
   */
  public function getOperatingMode()
  {
    return $this->OperatingMode;
  }

  /**
   * 
   * @param OperatingMode $OperatingMode
   * @return \YellowCube\ControlReference
   */
  public function setOperatingMode($OperatingMode)
  {
    $this->OperatingMode = $OperatingMode;
    return $this;
  }

  /**
   * 
   * @return Version
   */
  public function getVersion()
  {
    return $this->Version;
  }

  /**
   * 
   * @param Version $Version
   * @return \YellowCube\ControlReference
   */
  public function setVersion($Version)
  {
    $this->Version = $Version;
    return $this;
  }

  /**
   * 
   * @return CommType
   */
  public function getCommType()
  {
    return $this->CommType;
  }

  /**
   * 
   * @param CommType $CommType
   * @return \YellowCube\ControlReference
   */
  public function setCommType($CommType)
  {
    $this->CommType = $CommType;
    return $this;
  }

  /**
   * 
   * @return TransControlID
   */
  public function getTransControlID()
  {
    return $this->TransControlID;
  }

  /**
   * 
   * @param TransControlID $TransControlID
   * @return \YellowCube\ControlReference
   */
  public function setTransControlID($TransControlID)
  {
    $this->TransControlID = $TransControlID;
    return $this;
  }

  /**
   * 
   * @return TransMaxWait
   */
  public function getTransMaxWait()
  {
    return $this->TransMaxWait;
  }

  /**
   * 
   * @param TransMaxWait $TransMaxWait
   * @return \YellowCube\ControlReference
   */
  public function setTransMaxWait($TransMaxWait)
  {
    $this->TransMaxWait = $TransMaxWait;
    return $this;
  }

}
