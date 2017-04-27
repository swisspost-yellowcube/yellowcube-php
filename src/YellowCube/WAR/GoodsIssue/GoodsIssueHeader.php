<?php

namespace YellowCube\WAR\GoodsIssue;

class GoodsIssueHeader
{
    /**
     *
     * @var string $BookingVoucherID
     */
    protected $BookingVoucherID = null;

    /**
     *
     * @var string $BookingVoucherYear
     */
    protected $BookingVoucherYear = null;

    /**
     *
     * @var string $DepositorNo
     */
    protected $DepositorNo = null;

    /**
     * @param string $BookingVoucherID
     * @param string $BookingVoucherYear
     * @param string $DepositorNo
     */
    public function __construct($BookingVoucherID = null, $BookingVoucherYear = null, $DepositorNo = null)
    {
        $this->BookingVoucherID = $BookingVoucherID;
        $this->BookingVoucherYear = $BookingVoucherYear;
        $this->DepositorNo = $DepositorNo;
    }

    /**
     *
     * @return string
     */
    public function getBookingVoucherID()
    {
        return $this->BookingVoucherID;
    }

    /**
     *
     * @return string
     */
    public function getBookingVoucherYear()
    {
        return $this->BookingVoucherYear;
    }

    /**
     *
     * @return string
     */
    public function getDepositorNo()
    {
        return $this->DepositorNo;
    }
}
