<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\ART\Article;
use YellowCube\ART\ChangeFlag;
use YellowCube\ART\UnitsOfMeasure\ISO;
use YellowCube\Config;

$article = new Article;
$article
    ->setChangeFlag(ChangeFlag::INSERT)
    ->setPlantID('Y012')
    ->setDepositorNo('0000040750')
    ->setArticleNo('47686-3009-35/38')
    ->setBaseUOM(ISO::PCE)
    ->setNetWeight(0.042, ISO::KGM)
    ->setAlternateUnitISO(ISO::PCE)
    ->addArticleDescription('Ich wars nicht.', 'de')
;

$service = new YellowCube\Service(Config::testConfig());
$response = $service->insertArticleMasterData($article);

assert($response->isSuccess(), 'Inserting article failed.');

echo "Successfully added article with reference " . $response->getReference();


