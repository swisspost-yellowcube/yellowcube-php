<?php

namespace YellowCube\Art;

use YellowCube\Art\UnitsOfMeasure\UnitOfMeasure;
use YellowCube\Util\ClassUtil;

class Article
{
    /**
     *
     * @var string $ChangeFlag
     */
    protected $ChangeFlag = null;

    /**
     *
     * @var string $DepositorNo
     */
    protected $DepositorNo = null;

    /**
     *
     * @var string $PlantID
     */
    protected $PlantID = null;

    /**
     *
     * @var string $ArticleNo
     */
    protected $ArticleNo = null;

    /**
     *
     * @var string $BaseUOM
     */
    protected $BaseUOM = null;

    /**
     *
     * @var NetWeight $NetWeight
     */
    protected $NetWeight = null;

    /**
     *
     * @var int $BatchMngtReq
     */
    protected $BatchMngtReq = null;

    /**
     *
     * @var int $MinRemLife
     */
    protected $MinRemLife = null;

    /**
     *
     * @var string $PeriodExpDateType
     */
    protected $PeriodExpDateType = null;

    /**
     *
     * @var bool $SerialNoFlag
     */
    protected $SerialNoFlag = null;

    /**
     * At least 1 entry for the base unit of measure.
     *
     * @var array $UnitsOfMeasure
     */
    protected $UnitsOfMeasure = array();

    /**
     * @var array $ArticleDescriptions
     */
    protected $ArticleDescriptions = array();

    public function addArticleDescription(ArticleDescription $articleDescription)
    {
        $this->ArticleDescriptions[] = $articleDescription;

        return $this;
    }

    public function addUnitOfMeasure(UnitOfMeasure $unitOfMeasure)
    {
        $this->UnitsOfMeasure[ClassUtil::getClassName($unitOfMeasure)] = $unitOfMeasure;

        return $this;
    }

    /**
     * @param array $ArticleDescriptions
     */
    public function setArticleDescriptions($ArticleDescriptions)
    {
        $this->ArticleDescriptions[] = $ArticleDescriptions;

        return $this;
    }

    /**
     * @param string $ArticleNo
     */
    public function setArticleNo($ArticleNo)
    {
        $this->ArticleNo = $ArticleNo;
        return $this;
    }

    /**
     * @param string $BaseUOM
     */
    public function setBaseUOM($BaseUOM)
    {
        $this->BaseUOM = $BaseUOM;
        return $this;
    }

    /**
     * @param int $BatchMngtReq
     */
    public function setBatchMngtReq($BatchMngtReq)
    {
        $this->BatchMngtReq = $BatchMngtReq;
        return $this;
    }

    /**
     * @param string $ChangeFlag
     */
    public function setChangeFlag($ChangeFlag)
    {
        $this->ChangeFlag = $ChangeFlag;
        return $this;
    }

    /**
     * @param string $DepositorNo
     */
    public function setDepositorNo($DepositorNo)
    {
        $this->DepositorNo = $DepositorNo;
        return $this;
    }

    /**
     * @param int $MinRemLife
     */
    public function setMinRemLife($MinRemLife)
    {
        $this->MinRemLife = $MinRemLife;
        return $this;
    }

    /**
     * @param NetWeight $NetWeight
     */
    public function setNetWeight($NetWeight)
    {
        $this->NetWeight = $NetWeight;
        return $this;
    }

    /**
     * @param string $PeriodExpDateType
     */
    public function setPeriodExpDateType($PeriodExpDateType)
    {
        $this->PeriodExpDateType = $PeriodExpDateType;
        return $this;
    }

    /**
     * @param string $PlantID
     */
    public function setPlantID($PlantID)
    {
        $this->PlantID = $PlantID;
        return $this;
    }

    /**
     * @param boolean $SerialNoFlag
     */
    public function setSerialNoFlag($SerialNoFlag)
    {
        $this->SerialNoFlag = $SerialNoFlag;
        return $this;
    }

    /**
     * @param array $UnitsOfMeasure
     */
    public function setUnitsOfMeasure($UnitsOfMeasure)
    {
        $this->UnitsOfMeasure = $UnitsOfMeasure;
        return $this;
    }
}
