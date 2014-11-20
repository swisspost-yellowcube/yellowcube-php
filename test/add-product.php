<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Art\Article;
use YellowCube\Art\Article\NetWeight;
use YellowCube\Art\ArticleDescription;
use YellowCube\Art\UnitsOfMeasure\AlternateUnitISO;
use YellowCube\Art\UnitsOfMeasure\EAN;
use YellowCube\Art\UnitsOfMeasure\EANType;
use YellowCube\Art\UnitsOfMeasure\ISO;
use YellowCube\Config;

$article = (new Article)
    ->setChangeFlag('I')
    ->setPlantID('Y012')
    ->setDepositorNo('0000040750')
    ->setArticleNo('47686-3009-35/38')
    ->setBaseUOM('PCE')
    ->setNetWeight(new NetWeight(0.042, ISO::KGM))
    ->addUnitOfMeasure(new EAN('7501031311309', EANType::HE))
    ->addUnitOfMeasure(new AlternateUnitISO('PCE'))
    ->addArticleDescription(new ArticleDescription('Ich wars nicht.', 'de'))
    ->addArticleDescription(new ArticleDescription('Je te jure! Je n’ai rien fait!', 'fr'))
    ->addArticleDescription(new ArticleDescription('Non sono stato io!', 'it'))
    ->addArticleDescription(new ArticleDescription('It wasn\'t me.', 'en'))
;

$client = new YellowCube\Client(Config::testConfig());
$response = $client->insertArticleMasterData($article);

assert($response->isSuccess(), 'Inserting article failed.');

echo "Successfully added article with reference " . $response->getReference();


