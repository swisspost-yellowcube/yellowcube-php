<?php

namespace YellowCube\BAR;

class Article
{
    /**
     * @var string
     */
    protected $YCArticleNo = null;
    /**
     * @var string
     */
    protected $EAN = null;
    /**
     * @var string
     */
    protected $ArticleNo = null;
    /**
     * @var string
     */
    protected $ArticleDescription = null;
    /**
     * @var string
     */
    protected $Plant = null;
    /**
     * @var string
     */
    protected $StorageLocation = null;
    /**
     * @var string
     */
    protected $YCLot = null;
    /**
     * @var string
     */
    protected $Lot = null;
    /**
     * @var string
     */
    protected $BestBeforeDate = null;
    /**
     * @var string
     */
    protected $ProductionDate = null;
    /**
     * @var string
     */
    protected $StockType = null;
    /**
     * @var \YellowCube\BAR\QuantityUOM
     */
    protected $QuantityUOM = null;

    /**
     * @return string
     */
    public function getArticleDescription()
    {
        return $this->ArticleDescription;
    }

    /**
     * @return string
     */
    public function getBestBeforeDate()
    {
        return $this->BestBeforeDate;
    }

    /**
     * @return string
     */
    public function getLot()
    {
        return $this->Lot;
    }

    /**
     * @return string
     */
    public function getPlant()
    {
        return $this->Plant;
    }

    /**
     * @return \YellowCube\BAR\QuantityUOM
     */
    public function getQuantityUOM()
    {
        return $this->QuantityUOM;
    }

    /**
     * @return string
     */
    public function getStockType()
    {
        return $this->StockType;
    }

    /**
     * @return string
     */
    public function getStorageLocation()
    {
        return $this->StorageLocation;
    }

    /**
     * @return string
     */
    public function getYCArticleNo()
    {
        return $this->YCArticleNo;
    }

    /**
     * @return string
     */
    public function getYCLot()
    {
        return $this->YCLot;
    }

    /**
     * @return string
     */
    public function getArticleNo()
    {
        return $this->ArticleNo;
    }

    /**
     * @return string
     */
    public function getEAN()
    {
        return $this->EAN;
    }

    /**
     * @return string
     */
    public function getProductionDate()
    {
        return $this->ProductionDate;
    }
}
