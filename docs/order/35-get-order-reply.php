<?php
require __DIR__ . '/../../../../../../vendor/autoload.php';

### "order-reply"
$service = new YellowCube\Service(YellowCube\Config::testConfig());
$response = $service->getYCCustomerOrderReply('20186');

print_r($response);


