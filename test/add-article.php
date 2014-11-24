<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Art\Article;
use YellowCube\Art\ChangeFlag;
use YellowCube\Art\UnitsOfMeasure\EANType;
use YellowCube\Art\UnitsOfMeasure\ISO;
use YellowCube\Config;

$article = new Article;
$article
    ->setChangeFlag(ChangeFlag::INSERT)
    ->setPlantID('Y012')
    ->setDepositorNo('0000040750')
    ->setArticleNo('47686-3009-35/38')
    ->setBaseUOM(ISO::PCE)
    ->setNetWeight(0.042, ISO::KGM)
    ->setEAN('714718003580', EANType::HE)
    ->setAlternateUnitISO(ISO::PCE)
    ->setAltNumeratorUOM('12')
    ->setAltDenominatorUOM('12')
    ->setGrossWeight(0.5, ISO::KGM)
    ->setLength(120, ISO::MMT)
    ->setWidth(80, ISO::MMT)
    ->setHeight(20, ISO::MMT)
    ->setVolume(20, ISO::CMQ)
    ->addArticleDescription('Ich wars nicht.', 'de')
    ->addArticleDescription('Je te jure! Je n’ai rien fait!', 'fr')
    ->addArticleDescription('Non sono stato io!', 'it')
    ->addArticleDescription('It wasn\'t me.', 'en')
    ->setPeriodExpDateType(1)
    ->setSerialNoFlag(true)
;

$client = new YellowCube\Service(Config::testConfig());
$response = $client->insertArticleMasterData($article);

assert($response->isSuccess(), 'Inserting article failed.');

echo "Successfully added article with reference " . $response->getReference();


