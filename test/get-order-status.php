<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Config;

$service = new YellowCube\Service(Config::testConfig());
$response = $service->getYCCustomerOrderStatus(5523);

var_dump($response);
assert($response->isSuccess(), 'Getting status for order failed.');

echo "Successfully retrieved status for order with reference " . $response->getReference();


