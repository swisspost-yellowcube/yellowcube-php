<?php

namespace spec\YellowCube;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Psr\Log\LoggerInterface;
use YellowCube\ART\Article;
use YellowCube\BAR\Inventory;
use YellowCube\Util\SoapClient;
use YellowCube\WAB\Order;

class ServiceSpec extends ObjectBehavior
{
    function let(SoapClient $client, LoggerInterface $logger)
    {
        $this->beConstructedWith(null, $client, $logger);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('YellowCube\Service');
    }

    function it_asserts_config_is_given()
    {
        if (PHP_MAJOR_VERSION >= 7) {
            $this->shouldThrow('\TypeError')->during('__construct', array(''));
        } else {
            $this->shouldThrow('PhpSpec\Exception\Example\ErrorException')->during('__construct', array(''));
        }
    }

    function it_should_insert_article(Article $article, $client, $logger)
    {
        $this->insertArticleMasterData($article);
        $client->InsertArticleMasterData(
            Argument::withEntry('ControlReference', Argument::type('YellowCube\ControlReference'))
        )->shouldHaveBeenCalled();
        $logger->info(Argument::any(), Argument::any())->shouldHaveBeenCalled();
    }

    function it_should_return_article_status($client, $logger)
    {
        $this->getInsertArticleMasterDataStatus('reference-no');

        $client->GetInsertArticleMasterDataStatus(Argument::allOf(
            Argument::withEntry('ControlReference', Argument::type('YellowCube\ControlReference')),
            Argument::withEntry('Reference', 'reference-no')
        ))->shouldHaveBeenCalled();
        $logger->info(Argument::any(), Argument::any())->shouldHaveBeenCalled();
    }

    function it_should_create_customer_order(Order $order, $client, $logger)
    {
        $this->createYCCustomerOrder($order);

        $client->CreateYCCustomerOrder(Argument::allOf(
            Argument::withEntry('ControlReference', Argument::type('YellowCube\ControlReference')),
            Argument::withEntry('Order', Argument::type('YellowCube\WAB\Order'))
        ))->shouldHaveBeenCalled();
        $logger->info(Argument::type('string'), Argument::any())->shouldHaveBeenCalled();
    }

    function it_should_return_order_status($client, $logger)
    {
        $this->getYCCustomerOrderStatus('reference-no');

        $client->GetYCCustomerOrderStatus(Argument::allOf(
            Argument::withEntry('ControlReference', Argument::type('YellowCube\ControlReference')),
            Argument::withEntry('Reference', 'reference-no')
        ))->shouldHaveBeenCalled();
        $logger->info(Argument::any(), Argument::any())->shouldHaveBeenCalled();
    }

    function it_should_return_order_replies($client, $logger)
    {
        $this->getYCCustomerOrderReply()->shouldReturn(array());

        $client->GetYCCustomerOrderReply(Argument::allOf(
            Argument::withEntry('ControlReference', Argument::type('YellowCube\ControlReference'))
        ))->shouldHaveBeenCalled();
        $logger->info(Argument::type('string'), Argument::any())->shouldHaveBeenCalled();
    }

    function it_should_return_inventory($client, $logger)
    {
        $inventory = new \stdClass();
        $inventory->ArticleList = new \stdClass();
        $inventory->ArticleList->Article = [];
        $inventory->ControlReference = new \stdClass();
        $inventory->ControlReference->Timestamp = date('YmdHi', strtotime('yesterday'));

        $client->GetInventory(Argument::allOf(
            Argument::withEntry('ControlReference', Argument::type('YellowCube\ControlReference'))
        ))->willReturn($inventory);

        $this->getInventory()->shouldReturn(array());

        $client->GetInventory(Argument::allOf(
            Argument::withEntry('ControlReference', Argument::type('YellowCube\ControlReference'))
        ))->shouldHaveBeenCalled();

        $logger->info(Argument::type('string'), Argument::any())->shouldHaveBeenCalled();
    }

    function it_should_return_inventory_metadata($client, $logger)
    {
        $inventory = new \stdClass();
        $inventory->ArticleList = new \stdClass();
        $inventory->ArticleList->Article = [];
        $inventory->ControlReference = new \stdClass();
        $inventory->ControlReference->Timestamp = date('YmdHi', strtotime('yesterday'));

        $client->GetInventory(Argument::allOf(
            Argument::withEntry('ControlReference', Argument::type('YellowCube\ControlReference'))
        ))->willReturn($inventory);

        $inventory_result = $this->getInventoryWithMetadata();
        $inventory_result->shouldHaveType(Inventory::class);
        $inventory_result->getArticles()->shouldReturn([]);
        $inventory_result->getTimestamp()->shouldReturn($inventory->ControlReference->Timestamp);

        $logger->info(Argument::type('string'), Argument::any())->shouldHaveBeenCalled();
    }
}
