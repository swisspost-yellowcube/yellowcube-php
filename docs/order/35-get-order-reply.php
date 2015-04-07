<?php
require __DIR__ . '/../../../../../../vendor/autoload.php';

### "order-reply"
$service = new YellowCube\Service(YellowCube\Config::testConfig());
$goodsIssueList = $service->getYCCustomerOrderReply();

foreach ($goodsIssueList as $goodsIssue) {
    $header = $goodsIssue->getCustomerOrderHeader();
    echo "Order number: " .   $header->getCustomerOrderNo() . PHP_EOL;
    echo "PostalShipmentNo: " . $header->getPostalShipmentNo() . PHP_EOL;

    foreach ($goodsIssue->getCustomerOrderList() as $orderDetail) {
        echo "\tPosition: " . $orderDetail->getCustomerOrderPosNo();
        echo ", EAN: " . $orderDetail->getEAN() ;
        echo ", ArticleNo: " . $orderDetail->getArticleNo();
        echo PHP_EOL;
    }

    echo PHP_EOL . PHP_EOL;
}

echo "All information:" . PHP_EOL;
print_r($goodsIssueList);


