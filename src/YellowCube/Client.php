<?php

namespace YellowCube;

use YellowCube\Art\Article;
use YellowCube\Util\SoapClient;

class Client {

    /**
     * @var bool
     */
    protected $debugMode;

    /**
     * @var YellowCube_Service
     */
    protected $service;

    protected $sender;

    public function __construct($sender = 'YCTest', $debugMode = true, $service = null) {
        $this->sender = $sender;
        $this->debugMode = $debugMode;
        $this->service = $service ? $service : new SoapClient('YellowCubeService_009/YellowCubeService_extern.wsdl', array());
    }

    public function insertArticleMasterData(Article $article)
    {
        return $this->service->InsertArticleMasterData(array(
            'ControlReference' => $this->getControlReferenceByType('ART'),
            'ArticleList' => array(
                'Article' => $article
            )
        ));
    }

    protected function getControlReferenceByType($type) {
        $controlReference = new ControlReference();
        return $controlReference
            ->setType($type)
            ->setSender($this->sender)
            ->setReceiver('YELLOWCUBE')
            ->setTimestamp(date('Ymdhis'))
            ->setOperatingMode($this->debugMode ? "T" : "P")
            ->setVersion('1.0')
            ->setCommType('SOAP')
            ->setTransMaxWait(300)
            ;
    }
}
