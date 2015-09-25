<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Config;

$service = new YellowCube\Service(Config::testConfig());
$response = $service->getInsertArticleMasterDataStatus(5522);

var_dump($response);
assert($response->isSuccess(), 'Getting status for article failed.');

echo "Successfully retrieved status for article with reference " . $response->getReference();


