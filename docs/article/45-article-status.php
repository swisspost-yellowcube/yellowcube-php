<?php
require __DIR__ . '/../../../../../../vendor/autoload.php';

### "article-status"
$client = new YellowCube\Service(YellowCube\Config::testConfig());
$response = $client->getInsertArticleMasterDataStatus(1092);

### "article-status-response"
echo "Status for article {$response->getReference()}." . PHP_EOL . PHP_EOL;
print_r($response);


