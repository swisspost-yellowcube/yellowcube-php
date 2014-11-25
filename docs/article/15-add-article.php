<?php
require __DIR__ . '/../../../../../../vendor/autoload.php';

### "create-article"
use YellowCube\ART\Article;
use YellowCube\ART\ChangeFlag;
use YellowCube\ART\UnitsOfMeasure\ISO;

$article = new Article;
$article
    ->setChangeFlag(ChangeFlag::INSERT)
    ->setPlantID('Y012')
    ->setDepositorNo('0000040750')
    ->setArticleNo('47686-3009-35/38')
    ->setNetWeight(0.042, ISO::KGM)
    ->setAlternateUnitISO(ISO::PCE)
    ->addArticleDescription('Ich wars nicht.', 'de');

### "insert-article"
$client = new YellowCube\Service(YellowCube\Config::testConfig());
$response = $client->insertArticleMasterData($article);

echo "Successfully added article with reference {$response->getReference()}." . PHP_EOL . PHP_EOL;
print_r($response);


