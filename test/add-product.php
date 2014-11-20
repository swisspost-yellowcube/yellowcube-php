<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Art\Article;
use YellowCube\Art\Article\NetWeight;
use YellowCube\Art\ArticleDescription;
use YellowCube\Art\UnitsOfMeasure\AlternateUnitISO;
use YellowCube\Art\UnitsOfMeasure\EAN;
use YellowCube\Art\UnitsOfMeasure\EANType;
use YellowCube\Art\UnitsOfMeasure\ISO;

$article = (new Article)
    ->setChangeFlag('U')
    ->setPlantID('Y012')
    ->setDepositorNo('0000040750')
    ->setArticleNo('47686-3009-35/38')
    ->setBaseUOM('PCE')
    ->setNetWeight(new NetWeight(0.042, ISO::KGM))
    ->addUnitOfMeasure(new EAN('7501031311309', EANType::HE))
    ->addUnitOfMeasure(new AlternateUnitISO('PCE'))
    ->addArticleDescription(new ArticleDescription('Coton d\'une douceur extrme.Pointe rema', 'fr'))
;

$client = new YellowCube\Client();
$client->insertArticleMasterData($article);



