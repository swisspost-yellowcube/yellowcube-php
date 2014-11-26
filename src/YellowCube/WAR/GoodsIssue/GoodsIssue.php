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
     * @return GoodsIssueHeader
     */
    public function getGoodsIssueHeader()
    {
        return $this->GoodsIssueHeader;
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
     * @return CustomerOrderDetail[]
     */
    public function getCustomerOrderList()
    {
        return $this->CustomerOrderList->CustomerOrderDetail;
    }
}
