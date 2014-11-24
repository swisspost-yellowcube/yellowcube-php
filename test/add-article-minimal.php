<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Art\Article;
use YellowCube\Art\ChangeFlag;
use YellowCube\Art\UnitsOfMeasure\ISO;
use YellowCube\Config;

$article = new Article;
$article
    ->setChangeFlag(ChangeFlag::INSERT)
    ->setPlantID('Y012')
    ->setDepositorNo('0000040750')
    ->setArticleNo('47686-3009-35/38')
    ->setNetWeight(0.042, ISO::KGM)
    ->setEAN('7501031311309')
    ->setAlternateUnitISO(ISO::PCE)
    ->setLength(120, ISO::MMT)
    ->setWidth(80, ISO::MMT)
    ->setHeight(20, ISO::MMT)
    ->addArticleDescription('Ich wars nicht.', 'de')
;

$client = new YellowCube\Client(Config::testConfig());
$response = $client->insertArticleMasterData($article);

assert($response->isSuccess(), 'Inserting article failed.');

echo "Successfully added article with reference " . $response->getReference();


