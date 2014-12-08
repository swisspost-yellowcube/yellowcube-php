<?php

namespace YellowCube;

use YellowCube\ART\Article;
use YellowCube\Util\SoapClient;
use YellowCube\WAB\Order;
use YellowCube\WAR\GoodsIssue\GoodsIssue;

/**
 * Provides methods to mutate articles, order articles and list inventory.
 *
 * @package YellowCube
 * @author Adrian Philipp <adrian.philipp@liip.ch>
 */
class Service
{

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var \SoapClient
     */
    protected $client;

    /**
     * Creates a new Service used to connect to YellowCube.
     *
     * @param \YellowCube\Config $config Config containing user credentials, if not provided a test config is used.
     * @param \SoapClient $client Custom optional SoapClient.
     */
    public function __construct(Config $config = null, \SoapClient $client = null)
    {
        $this->config = $config;
        $this->client = $client;
    }

    /**
     * Mutates specified Article.
     *
     * The Article has a ChangeFlag which indicates if the
     * article should be inserted, updated or deleted.
     *
     * @param Article $article Article to mutate.
     * @return \YellowCube\GEN_Response
     */
    public function insertArticleMasterData(Article $article)
    {
        return $this->getClient()->InsertArticleMasterData(array(
            'ControlReference' => ControlReference::fromConfig('ART', $this->getConfig()),
            'ArticleList' => array(
                'Article' => $article
            )
        ));
    }

    /**
     * Returns the current status of a inserted Article.
     *
     * The article is referenced by its reference number.
     *
     * @param string $reference
     * @return \YellowCube\GEN_Response
     */
    public function getInsertArticleMasterDataStatus($reference)
    {
        return $this->getClient()->GetInsertArticleMasterDataStatus(array(
            'ControlReference' => ControlReference::fromConfig('ART', $this->getConfig()),
            'Reference' => $reference
        ));
    }

    /**
     * Creates a new customer order.
     *
     * @param Order $order
     *
     * @return \YellowCube\GEN_Response
     */
    public function createYCCustomerOrder(Order $order)
    {
        return $this->getClient()->CreateYCCustomerOrder(array(
            'ControlReference' => ControlReference::fromConfig('WAB', $this->getConfig()),
            'Order' => $order
        ));
    }

    /**
     * Returns the current status of a customer order specified by its reference.
     *
     * @param string $reference Customer order reference.
     *
     * @return \YellowCube\GEN_Response
     */
    public function getYCCustomerOrderStatus($reference)
    {
        return $this->getClient()->GetYCCustomerOrderStatus(array(
            'ControlReference' => ControlReference::fromConfig('WAB', $this->getConfig()),
            'Reference' => $reference
        ));
    }

    /**
     * Returns the current order reply of a customer order specified by
     * the customer order number.
     *
     * @param string $reference Customer order reference.
     *
     * @return \YellowCube\WAR\GoodsIssue\GoodsIssue[]
     */
    public function getYCCustomerOrderReply($customerOrderNo = '')
    {
        $WAR = $this->getClient()->GetYCCustomerOrderReply(array(
            'ControlReference' => ControlReference::fromConfig('WAR', $this->getConfig()),
            'CustomerOrderNo' => $customerOrderNo
        ));

        if (empty($WAR->WAR)) {
            return array();
        }

        return array_map(
            function($goodsIssue) {
                return $goodsIssue->GoodsIssue;
            },
            $WAR->WAR
        );
    }

    /**
     * Returns the current status of a customer order specified by its reference.
     *
     * @param string $reference Customer order reference.
     *
     * @return \YellowCube\BAR\Article[] Article List
     */
    public function getInventory()
    {
        return $this->getClient()->GetInventory(array(
            'ControlReference' => ControlReference::fromConfig('BAR', $this->getConfig()),
        ))->ArticleList->Article;
    }

    /**
     * Returns the config to use.
     *
     * @return \YellowCube\Config
     */
    protected function getConfig()
    {
        if (empty($this->config)) {
            $this->config = Config::testConfig();
        }

        return $this->config;
    }

    /**
     * Returns a SoapClient instance to use.
     *
     * @return \SoapClient
     */
    protected function getClient()
    {
        if (empty($this->client)) {
            $this->client = new SoapClient($this->getConfig()->getWsdl(), $this->getConfig()->getSoapClientOptions());
        }

        return $this->client;
    }

}
