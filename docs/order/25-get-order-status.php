<?php
require __DIR__ . '/../../../../../../vendor/autoload.php';

### "order-status"
$service = new YellowCube\Service(YellowCube\Config::testConfig());
$response = $service->getYCCustomerOrderStatus(1183);

### "order-status-response"
echo "Retrieved status for order with reference {$response->getReference()}." . PHP_EOL . PHP_EOL;

print_r($response);


