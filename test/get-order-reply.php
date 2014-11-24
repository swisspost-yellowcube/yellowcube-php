<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Config;

$client = new YellowCube\Client(Config::testConfig());
$response = $client->getYCCustomerOrderReply('20186');

var_dump($response);


