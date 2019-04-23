<?php
namespace YellowCube\WAR\GoodsIssue;

class GoodsIssue
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
     * @var \stdClass $CustomerOrderList
     */
    protected $CustomerOrderList = null;

    /**
     *
     * @return \YellowCube\WAR\GoodsIssue\GoodsIssueHeader
     */
    public function getGoodsIssueHeader()
    {
        return $this->GoodsIssueHeader;
    }

    /**
     *
     * @return \YellowCube\WAR\GoodsIssue\CustomerOrderHeader
     */
    public function getCustomerOrderHeader()
    {
        return $this->CustomerOrderHeader;
    }

    /**
     *
     * @return \YellowCube\WAR\GoodsIssue\CustomerOrderDetail[]
     */
    public function getCustomerOrderList()
    {
        return $this->CustomerOrderList->CustomerOrderDetail;
    }

    /**
     * @param GoodsIssueHeader $GoodsIssueHeader
     * @return GoodsIssue
     */
    public function setGoodsIssueHeader(GoodsIssueHeader $GoodsIssueHeader)
    {
        $this->GoodsIssueHeader = $GoodsIssueHeader;
        return $this;
    }

    /**
     * @param CustomerOrderHeader $CustomerOrderHeader
     * @return GoodsIssue
     */
    public function setCustomerOrderHeader(CustomerOrderHeader $CustomerOrderHeader)
    {
        $this->CustomerOrderHeader = $CustomerOrderHeader;
        return $this;
    }

    /**
     * @param \YellowCube\WAR\GoodsIssue\CustomerOrderDetail[] $CustomerOrderList
     *
     * @return GoodsIssue
     */
    public function setCustomerOrderList(array $CustomerOrderList)
    {
        $this->CustomerOrderList = new \stdClass();
        $this->CustomerOrderList->CustomerOrderDetail = $CustomerOrderList;
        return $this;
    }



}
