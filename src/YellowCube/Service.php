<?php

namespace YellowCube;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use YellowCube\ART\Article;
use YellowCube\BAR\Inventory;
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
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * Creates a new Service used to connect to YellowCube.
     *
     * @param \YellowCube\Config $config Config containing user credentials, if not provided a test config is used.
     * @param \SoapClient $client Custom optional SoapClient.
     * @param \Psr\Log\LoggerInterface $logger Optional logger.
     */
    public function __construct(Config $config = null, \SoapClient $client = null, LoggerInterface $logger = null)
    {
        $this->config = $config;
        $this->client = $client;
        $this->logger = $logger ?: new NullLogger();
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
        $this->logger->info(__METHOD__, array('article' => $article));

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
        $this->logger->info(__METHOD__, array('reference' => $reference));

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
        $this->logger->info(__METHOD__, array('order' => $order));

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
        $this->logger->info(__METHOD__, array('reference' => $reference));

        return $this->getClient()->GetYCCustomerOrderStatus(array(
            'ControlReference' => ControlReference::fromConfig('WAB', $this->getConfig()),
            'Reference' => $reference
        ));
    }

    /**
     * Returns the current order replies.
     *
     * @param string $reference Customer order reference.
     *
     * @return \YellowCube\WAR\GoodsIssue\GoodsIssue[]
     */
    public function getYCCustomerOrderReply()
    {
        $this->logger->info(__METHOD__);

        $WAR = $this->getClient()->GetYCCustomerOrderReply(array(
            'ControlReference' => ControlReference::fromConfig('WAR', $this->getConfig()),
        ));

        if (empty($WAR->WAR)) {
            return array();
        }

        return array_map(
            function ($goodsIssue) {
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
        return $this->getInventoryWithMetadata()->getArticles();
    }

    /**
     * Returns the current status of a customer order specified by its reference.
     *
     * @param string $reference Customer order reference.
     *
     * @return \YellowCube\BAR\Inventory
     */
    public function getInventoryWithMetadata()
    {
        $this->logger->info(__METHOD__);

        $inventory = $this->getClient()->GetInventory(array(
            'ControlReference' => ControlReference::fromConfig('BAR', $this->getConfig()),
        ));
        return new Inventory(!empty($inventory->ArticleList->Article) ? $inventory->ArticleList->Article : [], $inventory->ControlReference->Timestamp);
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
     * @return \YellowCube\Util\SoapClient|\SoapClient
     */
    protected function getClient()
    {
        if (empty($this->client)) {
            $this->client = new SoapClient(
                $this->getConfig()->getWsdl(),
                $this->getConfig()->getSoapClientOptions(),
                $this->logger
            );
        }

        return $this->client;
    }

    /**
     * Sets a logger instance to use.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }
}
