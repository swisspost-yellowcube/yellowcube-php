<?php
require __DIR__ . '/../../../../../../vendor/autoload.php';

### "article-status"
$service = new YellowCube\Service(YellowCube\Config::testConfig());
$response = $service->getInsertArticleMasterDataStatus(1098);

### "article-status-response"
echo "Status for article {$response->getReference()}." . PHP_EOL . PHP_EOL;
print_r($response);


