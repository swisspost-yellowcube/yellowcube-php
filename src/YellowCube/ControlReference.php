<?php

namespace YellowCube;

/**
 * Control reference which is part of every request to YellowCube.
 *
 * Contains sender, receiver, timestamp, version and other meta information
 * about a request.
 *
 * @package YellowCube
 */
class ControlReference
{
    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Sender
     */
    protected $Sender = null;

    /**
     * @var string $Receiver
     */
    protected $Receiver = null;

    /**
     * @var string $Timestamp
     */
    protected $Timestamp = null;

    /**
     * @var string $OperatingMode
     */
    protected $OperatingMode = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @var string $CommType
     */
    protected $CommType = null;

    /**
     * @var string $TransControlID
     */
    protected $TransControlID = null;

    /**
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
     * Returns a ControlReference for specified type.
     *
     * @param $type
     * @return ControlReference
     */
    public static function fromConfig($type, Config $config)
    {
        $controlReference = new ControlReference();
        return $controlReference
            ->setType($type)
            ->setSender($config->getSender())
            ->setReceiver($config->getReceiver())
            ->setTransMaxWait($config->getTimeoutSec())
            ->setTimestamp(date('Ymdhis'))
            ->setOperatingMode($config->getOperatingMode())
            ->setVersion('1.0')
            ->setCommType('SOAP');
    }

    /**
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     *
     * @param string $Type
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return string
     */
    public function getSender()
    {
        return $this->Sender;
    }

    /**
     * @param string $Sender
     */
    public function setSender($Sender)
    {
        $this->Sender = $Sender;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiver()
    {
        return $this->Receiver;
    }

    /**
     * @param string $Receiver
     */
    public function setReceiver($Receiver)
    {
        $this->Receiver = $Receiver;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * @param string $Timestamp
     */
    public function setTimestamp($Timestamp)
    {
        $this->Timestamp = $Timestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperatingMode()
    {
        return $this->OperatingMode;
    }

    /**
     * @param string $OperatingMode
     */
    public function setOperatingMode($OperatingMode)
    {
        $this->OperatingMode = $OperatingMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param string $Version
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommType()
    {
        return $this->CommType;
    }

    /**
     * @param string $CommType
     */
    public function setCommType($CommType)
    {
        $this->CommType = $CommType;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransControlID()
    {
        return $this->TransControlID;
    }

    /**
     * @param string $TransControlID
     */
    public function setTransControlID($TransControlID)
    {
        $this->TransControlID = $TransControlID;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransMaxWait()
    {
        return $this->TransMaxWait;
    }

    /**
     * @param int $TransMaxWait
     */
    public function setTransMaxWait($TransMaxWait)
    {
        $this->TransMaxWait = $TransMaxWait;
        return $this;
    }
}
