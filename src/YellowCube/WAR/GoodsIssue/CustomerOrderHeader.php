<?php

namespace YellowCube\WAR\GoodsIssue;

class CustomerOrderHeader
{
    /**
     *
     * @var string $YCDeliveryNo
     */
    protected $YCDeliveryNo = null;

    /**
     *
     * @var string $YCDeliveryDate
     */
    protected $YCDeliveryDate = null;

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
     * @var string $PostalShipmentNo
     */
    protected $PostalShipmentNo = null;

    /**
     *
     * @var string $PartnerReference
     */
    protected $PartnerReference = null;

    /**
     *
     * @param string $YCDeliveryNo
     * @param string $YCDeliveryDate
     * @param string $CustomerOrderNo
     * @param string $CustomerOrderDate
     * @param string $PostalShipmentNo
     * @param string $PartnerReference
     */
    public function __construct($YCDeliveryNo = null, $YCDeliveryDate = null, $CustomerOrderNo = null, $CustomerOrderDate = null, $PostalShipmentNo = null, $PartnerReference = null)
    {
        $this->YCDeliveryNo = $YCDeliveryNo;
        $this->YCDeliveryDate = $YCDeliveryDate;
        $this->CustomerOrderNo = $CustomerOrderNo;
        $this->CustomerOrderDate = $CustomerOrderDate;
        $this->PostalShipmentNo = $PostalShipmentNo;
        $this->PartnerReference = $PartnerReference;
    }

    /**
     *
     * @return string
     */
    public function getYCDeliveryNo()
    {
        return $this->YCDeliveryNo;
    }

    /**
     *
     * @return string
     */
    public function getYCDeliveryDate()
    {
        return $this->YCDeliveryDate;
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
     * @return string
     */
    public function getCustomerOrderDate()
    {
        return $this->CustomerOrderDate;
    }

    /**
     *
     * @return string
     */
    public function getPostalShipmentNo()
    {
        return $this->PostalShipmentNo;
    }

    /**
     *
     * @return string
     */
    public function getPartnerReference()
    {
        return $this->PartnerReference;
    }
}
