<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\Article;
use YellowCube\ArticleDescription;
use YellowCube\ArticleDescriptions;
use YellowCube\ArticleList;
use YellowCube\BaseUOM;
use YellowCube\ControlReference;
use YellowCube\EAN;
use YellowCube\EANType;
use YellowCube\ISO;
use YellowCube\NetWeight;
use YellowCube\UnitsOfMeasure;
use YellowCube\YellowCube_Service;


$client = new YellowCube_Service(array(
    'encoding' => 'UTF-8',

    // Stuff for development.
    'trace' => 1,
    'exceptions' => true,

//    'features' => SOAP_SINGLE_ELEMENT_ARRAYS,

    // Auth credentials for the SOAP request.
//    'login' => 'username',
//    'password' => 'password',
//    'local_cert' => "cert_key.pem"

    // Proxy url.
//    'proxy_host' => '127.0.0.1', // Do not add the schema here (http or https). It won't work.
//    'proxy_port' => 8888,
//    'connection_timeout' => 300

), __DIR__ . '/../YellowCubeService_005/YellowCubeService.wsdl');

$article = new Article();
$article
    ->setChangeFlag('I')
    ->setPlantID('Y012')
    ->setDepositorNo('0000040750')
    ->setArticleNo('47686-3009-35/38')
    ->setNetWeight(new NetWeight(0.042, ISO::KGM))
    ->setBaseUOM(new BaseUOM('PCE'))
    ->setUnitsOfMeasure(new UnitsOfMeasure(new EAN('7501031311309', EANType::HE), 'PCE'))
    ->setArticleDescriptions(new ArticleDescriptions(new ArticleDescription('Coton d\'une douceur extrme.Pointe rema', 'de')))
;

$ControlReference = new ControlReference('ART', 'YCTest', 'YELLOWCUBE', date('Ymdhis'), 'T', '1.0', 'SOAP',  null, 300);

$ART = new \YellowCube\ART($ControlReference, new ArticleList($article));
$client->InsertArticleMasterData($ART);




