<?php
require __DIR__ . '/../../../../../../vendor/autoload.php';

### "get-inventory"
$service = new YellowCube\Service(YellowCube\Config::testConfig());
$articleList = $service->getInventory();

echo "Retrieved " . count($articleList) . " articles from inventory." . PHP_EOL . PHP_EOL;

print_r($articleList);


