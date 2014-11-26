<?php

namespace YellowCube\WAR\GoodsIssue;

use YellowCube\BAR\QuantityUOM;

class CustomerOrderDetail
{
    /**
     *
     * @var int $BVPosNo
     */
    protected $BVPosNo = null;

    /**
     *
     * @var int $CustomerOrderPosNo
     */
    protected $CustomerOrderPosNo = null;

    /**
     *
     * @var string $YCArticleNo
     */
    protected $YCArticleNo = null;

    /**
     *
     * @var string $ArticleNo
     */
    protected $ArticleNo = null;

    /**
     *
     * @var string $EAN
     */
    protected $EAN = null;

    /**
     *
     * @var string $Lot
     */
    protected $Lot = null;

    /**
     *
     * @var string $Plant
     */
    protected $Plant = null;

    /**
     *
     * @var string $StorageLocation
     */
    protected $StorageLocation = null;

    /**
     *
     * @var int $TransactionType
     */
    protected $TransactionType = null;

    /**
     *
     * @var string $StockType
     */
    protected $StockType = null;

    /**
     *
     * @var QuantityUOM $QuantityUOM
     */
    protected $QuantityUOM = null;

    /**
     *
     * @var string $ReturnReason
     */
    protected $ReturnReason = null;

    /**
     *
     * @var string $SerialNumbers
     */
    protected $SerialNumbers = null;

    /**
     *
     * @param int $BVPosNo
     * @param int $CustomerOrderPosNo
     * @param string $YCArticleNo
     * @param string $ArticleNo
     * @param string $EAN
     * @param string $Lot
     * @param string $Plant
     * @param string $StorageLocation
     * @param string $TransactionType
     * @param string $StockType
     * @param QuantityUOM $QuantityUOM
     * @param string $ReturnReason
     * @param string $SerialNumbers
     */
    public function __construct($BVPosNo = null, $CustomerOrderPosNo = null, $YCArticleNo = null, $ArticleNo = null, $EAN = null, $Lot = null, $Plant = null, $StorageLocation = null, $TransactionType = null, $StockType = null, $QuantityUOM = null, $ReturnReason = null, $SerialNumbers = null)
    {
        $this->BVPosNo = $BVPosNo;
        $this->CustomerOrderPosNo = $CustomerOrderPosNo;
        $this->YCArticleNo = $YCArticleNo;
        $this->ArticleNo = $ArticleNo;
        $this->EAN = $EAN;
        $this->Lot = $Lot;
        $this->Plant = $Plant;
        $this->StorageLocation = $StorageLocation;
        $this->TransactionType = $TransactionType;
        $this->StockType = $StockType;
        $this->QuantityUOM = $QuantityUOM;
        $this->ReturnReason = $ReturnReason;
        $this->SerialNumbers = $SerialNumbers;
    }

    /**
     *
     * @return int
     */
    public function getBVPosNo()
    {
        return $this->BVPosNo;
    }

    /**
     *
     * @return int
     */
    public function getCustomerOrderPosNo()
    {
        return $this->CustomerOrderPosNo;
    }

    /**
     *
     * @return string
     */
    public function getYCArticleNo()
    {
        return $this->YCArticleNo;
    }

    /**
     *
     * @return string
     */
    public function getArticleNo()
    {
        return $this->ArticleNo;
    }

    /**
     *
     * @return string
     */
    public function getEAN()
    {
        return $this->EAN;
    }

    /**
     *
     * @return string
     */
    public function getLot()
    {
        return $this->Lot;
    }

    /**
     *
     * @return string
     */
    public function getPlant()
    {
        return $this->Plant;
    }

    /**
     *
     * @return string
     */
    public function getStorageLocation()
    {
        return $this->StorageLocation;
    }

    /**
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->TransactionType;
    }

    /**
     *
     * @return string
     */
    public function getStockType()
    {
        return $this->StockType;
    }

    /**
     *
     * @return QuantityUOM
     */
    public function getQuantityUOM()
    {
        return $this->QuantityUOM;
    }

    /**
     *
     * @return string
     */
    public function getReturnReason()
    {
        return $this->ReturnReason;
    }

    /**
     *
     * @return string
     */
    public function getSerialNumbers()
    {
        return $this->SerialNumbers;
    }
}
