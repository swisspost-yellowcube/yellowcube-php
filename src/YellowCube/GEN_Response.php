<?php

namespace YellowCube;

class GEN_Response
{

    /**
     *
     * @var string $EventTimestamp
     */
    protected $EventTimestamp = null;

    /**
     *
     * @var string $MessageType
     */
    protected $MessageType = null;

    /**
     *
     * @var int $StatusCode
     */
    protected $StatusCode = null;

    /**
     *
     * @var string $StatusType
     */
    protected $StatusType = null;

    /**
     *
     * @var string $StatusText
     */
    protected $StatusText = null;

    /**
     *
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     *
     * @var string $Reference1
     */
    protected $Reference1 = null;

    /**
     *
     * @var string $Reference2
     */
    protected $Reference2 = null;

    /**
     *
     * @var string $Reference3
     */
    protected $Reference3 = null;

    /**
     *
     * @var string $Reference4
     */
    protected $Reference4 = null;

    /**
     *
     * @param string $EventTimestamp
     * @param string $MessageType
     * @param int $StatusCode
     * @param string $StatusType
     * @param string $StatusText
     * @param string $Reference
     * @param string $Reference1
     * @param string $Reference2
     * @param string $Reference3
     * @param string $Reference4
     */
    public function __construct($EventTimestamp = null, $MessageType = null, $StatusCode = null, $StatusType = null, $StatusText = null, $Reference = null, $Reference1 = null, $Reference2 = null, $Reference3 = null, $Reference4 = null)
    {
        $this->EventTimestamp = $EventTimestamp;
        $this->MessageType = $MessageType;
        $this->StatusCode = $StatusCode;
        $this->StatusType = $StatusType;
        $this->StatusText = $StatusText;
        $this->Reference = $Reference;
        $this->Reference1 = $Reference1;
        $this->Reference2 = $Reference2;
        $this->Reference3 = $Reference3;
        $this->Reference4 = $Reference4;
    }

    /**
     * Returns true if the requested object is not finished processing.
     *
     * @return bool
     */
    public function isPending()
    {
        return !$this->isError()
            && $this->getStatusCode() < 100;
    }

    public function isSuccess()
    {
        return $this->getStatusType() == 'S';
    }

    public function isError()
    {
        return $this->getStatusType() == 'E';
    }

    /**
     * @return string
     */
    public function getEventTimestamp()
    {
        return $this->EventTimestamp;
    }

    /**
     * @return string
     */
    public function getMessageType()
    {
        return $this->MessageType;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @return string
     */
    public function getReference1()
    {
        return $this->Reference1;
    }

    /**
     * @return string
     */
    public function getReference2()
    {
        return $this->Reference2;
    }

    /**
     * @return string
     */
    public function getReference3()
    {
        return $this->Reference3;
    }

    /**
     * @return string
     */
    public function getReference4()
    {
        return $this->Reference4;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * @return string
     */
    public function getStatusText()
    {
        return $this->StatusText;
    }

    /**
     * @return string
     */
    public function getStatusType()
    {
        return $this->StatusType;
    }
}
