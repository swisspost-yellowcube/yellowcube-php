<?php

namespace YellowCube\WAB;

class Position
{
    /**
     *
     * @var int $PosNo
     */
    protected $PosNo = null;
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
     * @var string $YCLot
     */
    protected $YCLot = null;
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
     * @var float $Quantity
     */
    protected $Quantity = null;
    /**
     *
     * @var string $QuantityISO
     */
    protected $QuantityISO = null;
    /**
     *
     * @var string $ShortDescription
     */
    protected $ShortDescription = null;
    /**
     *
     * @var string $PickingMessage
     */
    protected $PickingMessage = null;
    /**
     *
     * @var string $PickingMessageLC
     */
    protected $PickingMessageLC = null;
    /**
     *
     * @var string $ReturnReason
     */
    protected $ReturnReason = null;

    /**
     *
     * @return int
     */
    public function getPosNo()
    {
        return $this->PosNo;
    }

    /**
     *
     * @param int $PosNo
     */
    public function setPosNo($PosNo)
    {
        $this->PosNo = $PosNo;
        return $this;
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
     * @param string $ArticleNo
     */
    public function setArticleNo($ArticleNo)
    {
        $this->ArticleNo = $ArticleNo;
        return $this;
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
     * @param string $EAN
     */
    public function setEAN($EAN)
    {
        $this->EAN = $EAN;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getYCLot()
    {
        return $this->YCLot;
    }

    /**
     *
     * @param string $YCLot
     */
    public function setYCLot($YCLot)
    {
        $this->YCLot = $YCLot;
        return $this;
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
     * @param string $Lot
     */
    public function setLot($Lot)
    {
        $this->Lot = $Lot;
        return $this;
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
     * @param string $Plant
     */
    public function setPlant($Plant)
    {
        $this->Plant = $Plant;
        return $this;
    }

    /**
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     *
     * @param float $Quantity
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getQuantityISO()
    {
        return $this->QuantityISO;
    }

    /**
     *
     * @param string $QuantityISO
     */
    public function setQuantityISO($QuantityISO)
    {
        $this->QuantityISO = $QuantityISO;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->ShortDescription;
    }

    /**
     *
     * @param string $ShortDescription
     */
    public function setShortDescription($ShortDescription)
    {
        $this->ShortDescription = $ShortDescription;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPickingMessage()
    {
        return $this->PickingMessage;
    }

    /**
     *
     * @param string $PickingMessage
     */
    public function setPickingMessage($PickingMessage)
    {
        $this->PickingMessage = $PickingMessage;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPickingMessageLC()
    {
        return $this->PickingMessageLC;
    }

    /**
     *
     * @param string $PickingMessageLC
     */
    public function setPickingMessageLC($PickingMessageLC)
    {
        $this->PickingMessageLC = $PickingMessageLC;
        return $this;
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
     * @param string $ReturnReason
     */
    public function setReturnReason($ReturnReason)
    {
        $this->ReturnReason = $ReturnReason;
        return $this;
    }
}
