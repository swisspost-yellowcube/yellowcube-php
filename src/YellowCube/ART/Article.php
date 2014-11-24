<?php

namespace YellowCube\ART;

use YellowCube\ART\UnitsOfMeasure\AltDenominatorUOM;
use YellowCube\ART\UnitsOfMeasure\AlternateUnitISO;
use YellowCube\ART\UnitsOfMeasure\AltNumeratorUOM;
use YellowCube\ART\UnitsOfMeasure\EAN;
use YellowCube\ART\UnitsOfMeasure\GrossWeight;
use YellowCube\ART\UnitsOfMeasure\Height;
use YellowCube\ART\UnitsOfMeasure\Length;
use YellowCube\ART\UnitsOfMeasure\UnitOfMeasure;
use YellowCube\ART\UnitsOfMeasure\Volume;
use YellowCube\ART\UnitsOfMeasure\Width;
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

    /**
     * Helper to set the unit of measure length .
     *
     * @param $length
     * @param $ISO
     * @return $this
     */
    public function setLength($length, $ISO)
    {
        $this->addUnitOfMeasure(new Length($length, $ISO));

        return $this;
    }

    /**
     * Helper to set the unit of measure width.
     *
     * @param $width
     * @param $ISO
     * @return $this
     */
    public function setWidth($width, $ISO)
    {
        $this->addUnitOfMeasure(new Width($width, $ISO));

        return $this;
    }

    /**
     * Helper to set the unit of measure height.
     *
     * @param $height
     * @param $ISO
     * @return $this
     */
    public function setHeight($height, $ISO)
    {
        $this->addUnitOfMeasure(new Height($height, $ISO));

        return $this;
    }

    /**
     * Helper to set the unit of measure EAN.
     *
     * @param $EAN
     * @param string $EANType
     * @return $this
     */
    public function setEAN($EAN, $EANType = null)
    {
        $this->addUnitOfMeasure(new EAN($EAN, $EANType));

        return $this;
    }

    /**
     * Helper to set the unit of measure alternate unit ISO.
     *
     * @param $alternateUnitISO
     * @return $this
     */
    public function setAlternateUnitISO($alternateUnitISO)
    {
        $this->addUnitOfMeasure(new AlternateUnitISO($alternateUnitISO));

        return $this;
    }

    /**
     * Helper to set the unit of measure alternate numerator.
     *
     * @param $altNumeratorUOM
     * @return $this
     */
    public function setAltNumeratorUOM($altNumeratorUOM)
    {
        $this->addUnitOfMeasure(new AltNumeratorUOM($altNumeratorUOM));

        return $this;
    }

    /**
     * Helper to set the unit of measure alternate denominator.
     *
     * @param $altDenominatorUOM
     * @return $this
     */
    public function setAltDenominatorUOM($altDenominatorUOM)
    {
        $this->addUnitOfMeasure(new AltDenominatorUOM($altDenominatorUOM));

        return $this;
    }

    /**
     * Helper to set the unit of measure gross weight.
     *
     * @param $grossWeight
     * @param $ISO
     * @return $this
     */
    public function setGrossWeight($grossWeight, $ISO)
    {
        $this->addUnitOfMeasure(new GrossWeight($grossWeight, $ISO));

        return $this;
    }

    /**
     * Helper to set the unit of measure volume.
     *
     * @param $volume
     * @param $ISO
     * @return $this
     */
    public function setVolume($volume, $ISO)
    {
        $this->addUnitOfMeasure(new Volume($volume, $ISO));

        return $this;
    }

    public function addArticleDescription($description, $langCode)
    {
        $this->ArticleDescriptions[] = new ArticleDescription($description, $langCode);

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
    public function setNetWeight($netWeight, $ISO)
    {
        $this->NetWeight = new NetWeight($netWeight, $ISO);
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
