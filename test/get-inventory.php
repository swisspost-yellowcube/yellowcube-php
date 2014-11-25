<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Config;

$service = new YellowCube\Service(Config::testConfig());
$articleList = $service->getInventory();

var_dump($articleList);
assert(count($articleList), 'Getting inventory failed.');

echo "Successfully retrieved " . count($articleList) . " articles from inventory.";


