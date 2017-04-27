<?php

namespace YellowCube\WAB;

use YellowCube\Util\ClassUtil;
use YellowCube\WAB\AdditionalService\AdditionalService;

class Order
{
    /**
     *
     * @var OrderHeader $OrderHeader
     */
    protected $OrderHeader = null;
    /**
     *
     * @var array $PartnerAddress
     */
    protected $PartnerAddress = array();
    /**
     *
     * @var array $ValueAddedServices
     */
    protected $ValueAddedServices = array('AdditionalService' => array());
    /**
     *
     * @var array $OrderPositions
     */
    protected $OrderPositions = array();
    /**
     *
     * @var array $OrderDocuments
     */
    protected $OrderDocuments = array(
        'OrderDocumentsFlag' => 0
    );

    /**
     *
     * @return OrderHeader
     */
    public function getOrderHeader()
    {
        return $this->OrderHeader;
    }

    /**
     *
     * @param OrderHeader $OrderHeader
     */
    public function setOrderHeader($OrderHeader)
    {
        $this->OrderHeader = $OrderHeader;
        return $this;
    }

    /**
     *
     * @return Partner
     */
    public function getPartnerAddress()
    {
        return $this->PartnerAddress['Partner'];
    }

    /**
     *
     * @param Partner $PartnerAddress
     */
    public function setPartnerAddress($Partner)
    {
        $this->PartnerAddress['Partner'] = $Partner;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function getValueAddedServices()
    {
        return $this->ValueAddedServices['AdditionalService'];
    }

    /**
     *
     * @param AdditionalService $additionalService
     */
    public function addValueAddedService(AdditionalService $additionalService)
    {
        $this->ValueAddedServices['AdditionalService'][ClassUtil::getClassName($additionalService)] = $additionalService;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function getOrderPositions()
    {
        return $this->OrderPositions;
    }

    /**
     * @param array $OrderPositions
     */
    public function setOrderPositions($OrderPositions)
    {
        $this->OrderPositions = $OrderPositions;
        return $this;
    }

    /**
     * @param array $OrderPositions
     */
    public function addOrderPosition(Position $orderPosition)
    {
        $this->OrderPositions[] = $orderPosition;
        return $this;
    }

    /**
     * @param array $OrderPositions
     */
    public function addOrderDocument(Doc $doc)
    {
        if (!isset($this->OrderDocuments['Docs'])) {
            $this->OrderDocuments['Docs'] = array();
        }

        $this->OrderDocuments['Docs'][] = $doc;
        $this->setOrderDocumentsFlag(true);
        return $this;
    }

    /**
     *
     * @return Doc[]
     */
    public function getOrderDocuments()
    {
        return $this->OrderDocuments['Docs'];
    }

    /**
     *
     * @param array $OrderDocuments
     */
    public function setOrderDocuments($OrderDocuments)
    {
        $this->OrderDocuments['Docs'] = $OrderDocuments;
        return $this;
    }

    public function setOrderDocumentsFlag($orderDocumentsFlag)
    {
        $this->OrderDocuments['OrderDocumentsFlag'] = (int) $orderDocumentsFlag;
        return $this;
    }

    /**
     *
     * @param array $OrderDocuments
     */
    public function addOrderDocFilename(OrderDocFilename $orderDocFilename)
    {
        if (!isset($this->OrderDocuments['OrderDocFilenames'])) {
            $this->OrderDocuments['OrderDocFilenames'] = array();
        }

        $this->OrderDocuments['OrderDocFilenames'][] = $orderDocFilename;
        return $this;
    }
}
