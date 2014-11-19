<?php

namespace YellowCube;

class GoodsIssueCustom
{

  /**
   * 
   * @var GoodsIssueHeader $GoodsIssueHeader
   */
  protected $GoodsIssueHeader = null;

  /**
   * 
   * @var CustomerOrderHeader $CustomerOrderHeader
   */
  protected $CustomerOrderHeader = null;

  /**
   * 
   * @var CustomerOrderList $CustomerOrderList
   */
  protected $CustomerOrderList = null;

  /**
   * 
   * @param GoodsIssueHeader $GoodsIssueHeader
   * @param CustomerOrderHeader $CustomerOrderHeader
   * @param CustomerOrderList $CustomerOrderList
   */
  public function __construct($GoodsIssueHeader = null, $CustomerOrderHeader = null, $CustomerOrderList = null)
  {
    $this->GoodsIssueHeader = $GoodsIssueHeader;
    $this->CustomerOrderHeader = $CustomerOrderHeader;
    $this->CustomerOrderList = $CustomerOrderList;
  }

  /**
   * 
   * @return GoodsIssueHeader
   */
  public function getGoodsIssueHeader()
  {
    return $this->GoodsIssueHeader;
  }

  /**
   * 
   * @param GoodsIssueHeader $GoodsIssueHeader
   * @return \YellowCube\GoodsIssue
   */
  public function setGoodsIssueHeader($GoodsIssueHeader)
  {
    $this->GoodsIssueHeader = $GoodsIssueHeader;
    return $this;
  }

  /**
   * 
   * @return CustomerOrderHeader
   */
  public function getCustomerOrderHeader()
  {
    return $this->CustomerOrderHeader;
  }

  /**
   * 
   * @param CustomerOrderHeader $CustomerOrderHeader
   * @return \YellowCube\GoodsIssue
   */
  public function setCustomerOrderHeader($CustomerOrderHeader)
  {
    $this->CustomerOrderHeader = $CustomerOrderHeader;
    return $this;
  }

  /**
   * 
   * @return CustomerOrderList
   */
  public function getCustomerOrderList()
  {
    return $this->CustomerOrderList;
  }

  /**
   * 
   * @param CustomerOrderList $CustomerOrderList
   * @return \YellowCube\GoodsIssue
   */
  public function setCustomerOrderList($CustomerOrderList)
  {
    $this->CustomerOrderList = $CustomerOrderList;
    return $this;
  }

}
