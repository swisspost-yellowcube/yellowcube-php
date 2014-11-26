<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Config;

$service = new YellowCube\Service(Config::testConfig());
$response = $service->getYCCustomerOrderReply('SOAP-005');

var_dump($response);


