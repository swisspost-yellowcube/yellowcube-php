<?php

namespace YellowCube;

class GoodsIssueHeader
{

  /**
   * 
   * @var BookingVoucherID $BookingVoucherID
   */
  protected $BookingVoucherID = null;

  /**
   * 
   * @var BookingVoucherYear $BookingVoucherYear
   */
  protected $BookingVoucherYear = null;

  /**
   * 
   * @var DepositorNo $DepositorNo
   */
  protected $DepositorNo = null;

  /**
   * 
   * @param BookingVoucherID $BookingVoucherID
   * @param BookingVoucherYear $BookingVoucherYear
   * @param DepositorNo $DepositorNo
   */
  public function __construct($BookingVoucherID = null, $BookingVoucherYear = null, $DepositorNo = null)
  {
    $this->BookingVoucherID = $BookingVoucherID;
    $this->BookingVoucherYear = $BookingVoucherYear;
    $this->DepositorNo = $DepositorNo;
  }

  /**
   * 
   * @return BookingVoucherID
   */
  public function getBookingVoucherID()
  {
    return $this->BookingVoucherID;
  }

  /**
   * 
   * @param BookingVoucherID $BookingVoucherID
   * @return \YellowCube\GoodsIssueHeader
   */
  public function setBookingVoucherID($BookingVoucherID)
  {
    $this->BookingVoucherID = $BookingVoucherID;
    return $this;
  }

  /**
   * 
   * @return BookingVoucherYear
   */
  public function getBookingVoucherYear()
  {
    return $this->BookingVoucherYear;
  }

  /**
   * 
   * @param BookingVoucherYear $BookingVoucherYear
   * @return \YellowCube\GoodsIssueHeader
   */
  public function setBookingVoucherYear($BookingVoucherYear)
  {
    $this->BookingVoucherYear = $BookingVoucherYear;
    return $this;
  }

  /**
   * 
   * @return DepositorNo
   */
  public function getDepositorNo()
  {
    return $this->DepositorNo;
  }

  /**
   * 
   * @param DepositorNo $DepositorNo
   * @return \YellowCube\GoodsIssueHeader
   */
  public function setDepositorNo($DepositorNo)
  {
    $this->DepositorNo = $DepositorNo;
    return $this;
  }

}
