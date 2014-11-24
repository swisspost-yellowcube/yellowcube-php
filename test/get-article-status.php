<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Config;

$client = new YellowCube\Client(Config::testConfig());
$response = $client->getInsertArticleMasterDataStatus(1040);

var_dump($response);
assert($response->isSuccess(), 'Getting status for article failed.');

echo "Successfully retrieved status for article with reference " . $response->getReference();


