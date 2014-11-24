<?php

namespace YellowCube\WAB;

class OrderHeader
{
    /**
     *
     * @var string $DepositorNo
     */
    protected $DepositorNo = null;
    /**
     *
     * @var string $CustomerOrderNo
     */
    protected $CustomerOrderNo = null;
    /**
     *
     * @var string $CustomerOrderDate
     */
    protected $CustomerOrderDate = null;

    /**
     *
     * @param string $DepositorNo
     * @param string $CustomerOrderNo
     * @param string $CustomerOrderDate
     */
    public function __construct($DepositorNo = null, $CustomerOrderNo = null, $CustomerOrderDate = null)
    {
        $this->DepositorNo = $DepositorNo;
        $this->CustomerOrderNo = $CustomerOrderNo;
        $this->CustomerOrderDate = $CustomerOrderDate;
    }

    /**
     *
     * @return string
     */
    public function getDepositorNo()
    {
        return $this->DepositorNo;
    }

    /**
     *
     * @param string $DepositorNo
     */
    public function setDepositorNo($DepositorNo)
    {
        $this->DepositorNo = $DepositorNo;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCustomerOrderNo()
    {
        return $this->CustomerOrderNo;
    }

    /**
     *
     * @param string $CustomerOrderNo
     */
    public function setCustomerOrderNo($CustomerOrderNo)
    {
        $this->CustomerOrderNo = $CustomerOrderNo;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCustomerOrderDate()
    {
        return $this->CustomerOrderDate;
    }

    /**
     *
     * @param string $CustomerOrderDate
     */
    public function setCustomerOrderDate($CustomerOrderDate)
    {
        $this->CustomerOrderDate = $CustomerOrderDate;
        return $this;
    }
}
