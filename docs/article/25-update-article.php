<?php
require __DIR__ . '/../../../../../../vendor/autoload.php';

### "create-article"
use YellowCube\ART\Article;
use YellowCube\ART\ChangeFlag;
use YellowCube\ART\UnitsOfMeasure\ISO;

$article = new Article;
$article
    ->setChangeFlag(ChangeFlag::UPDATE)
    ->setPlantID('Y012')
    ->setDepositorNo('0000040750')
    ->setArticleNo('47686-3009-35/38')
    ->setBaseUOM(ISO::PCE)
    ->setNetWeight(0.042, ISO::KGM)
    ->setAlternateUnitISO(ISO::PCE)
    ->addArticleDescription('Ich wars nicht.', 'de');

### "insert-article"
$service = new YellowCube\Service(YellowCube\Config::testConfig());
$response = $service->insertArticleMasterData($article);

echo "Successfully updated article with reference {$response->getReference()}." . PHP_EOL . PHP_EOL;
print_r($response);


