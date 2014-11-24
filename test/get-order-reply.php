<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Config;

$client = new YellowCube\Service(Config::testConfig());
$response = $client->getYCCustomerOrderReply('20186');

var_dump($response);


