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

    public function __construct($debugMode = true, $sender = 'YCTest', $service = null) {
        $this->sender = $sender;
        $this->debugMode = $debugMode;


        $this->service = $service;
    }

    protected function getService() {
        if (empty($this->service)) {
            $options = array(
                'soap_version' => SOAP_1_1,
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
                'classmap' => array(
                    'GEN_Response' => 'YellowCube\GEN_Response'
                ),
            );

            if ($this->debugMode == true) {
                $options['proxy_host'] = '127.0.0.1';
                $options['proxy_port'] = '8888';
            }

            $this->service = new SoapClient('YellowCubeService_009/YellowCubeService_extern.wsdl', $options);
        }

        return $this->service;
    }

    /**
     * @param Article $article
     * @return GEN_Response
     */
    public function insertArticleMasterData(Article $article)
    {
        return $this->getService()->InsertArticleMasterData(array(
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
            ->setOperatingMode('T') // todo: $this->debugMode ? "T" : "P"
            ->setVersion('1.0')
            ->setCommType('SOAP');
    }
}
