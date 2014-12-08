<?php
require __DIR__ . '/../../../../../../vendor/autoload.php';

### "get-inventory"
$service = new YellowCube\Service(YellowCube\Config::testConfig());
$articleList = $service->getInventory();

echo "Retrieved " . count($articleList) . " articles from inventory." . PHP_EOL . PHP_EOL;

foreach ($articleList as $article) {
    echo "ArticleNo: "
        .  $article->getArticleNo() . PHP_EOL;
    echo "Quantity: " .  (string) $article->getQuantityUOM() . ' '
        . $article->getQuantityUOM()->getQuantityISO() . PHP_EOL;
    echo "ArticleDescription: "
        .  $article->getArticleDescription() . PHP_EOL;
    echo "Plant: "
        .  $article->getPlant() . PHP_EOL;
    echo "StorageLocation: "
        .  $article->getStorageLocation() . PHP_EOL;
    echo "YCLot: "
        .  $article->getYCLot() . PHP_EOL;
    echo "YCArticleNo: "
        .  $article->getYCArticleNo() . PHP_EOL;

    echo PHP_EOL . PHP_EOL;
}

echo "List of all data: ";
print_r($articleList);


