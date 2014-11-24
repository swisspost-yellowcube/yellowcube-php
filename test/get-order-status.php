<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Config;

$client = new YellowCube\Client(Config::testConfig());
$response = $client->getYCCustomerOrderStatus(1054);

var_dump($response);
assert($response->isSuccess(), 'Getting status for order failed.');

echo "Successfully retrieved status for order with reference " . $response->getReference();


