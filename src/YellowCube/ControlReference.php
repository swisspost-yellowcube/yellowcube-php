<?php

namespace YellowCube;

class ControlReference
{

  /**
   *
   * @var string $Type
   */
  protected $Type = null;

  /**
   *
   * @var string $Sender
   */
  protected $Sender = null;

  /**
   *
   * @var string $Receiver
   */
  protected $Receiver = null;

  /**
   *
   * @var string $Timestamp
   */
  protected $Timestamp = null;

  /**
   *
   * @var string $OperatingMode
   */
  protected $OperatingMode = null;

  /**
   *
   * @var string $Version
   */
  protected $Version = null;

  /**
   *
   * @var string $CommType
   */
  protected $CommType = null;

  /**
   *
   * @var string $TransControlID
   */
  protected $TransControlID = null;

  /**
   *
   * @var int $TransMaxWait
   */
  protected $TransMaxWait = null;

  /**
   *
   * @param string $Type
   * @param string $Sender
   * @param string $Receiver
   * @param string $Timestamp
   * @param string $OperatingMode
   * @param string $Version
   * @param string $CommType
   * @param string $TransControlID
   * @param int $TransMaxWait
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
   * @return \YellowCube\API\ControlReference
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
   * @param string $Sender
   * @return \YellowCube\API\ControlReference
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
   * @return \YellowCube\API\ControlReference
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
   * @return \YellowCube\API\ControlReference
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
   * @return \YellowCube\API\ControlReference
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
   * @return \YellowCube\API\ControlReference
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
   * @return \YellowCube\API\ControlReference
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
   * @return \YellowCube\API\ControlReference
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
   * @return \YellowCube\API\ControlReference
   */
  public function setTransMaxWait($TransMaxWait)
  {
    $this->TransMaxWait = $TransMaxWait;
    return $this;
  }

}
