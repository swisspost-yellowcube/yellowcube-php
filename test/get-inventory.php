<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Config;

$client = new YellowCube\Client(Config::testConfig());
$articleList = $client->getInventory();

var_dump($articleList);
assert(count($articleList), 'Getting inventory failed.');

echo "Successfully retrieved " . count($articleList) . " articles from inventory.";


