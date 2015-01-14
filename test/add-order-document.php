<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\WAB\AdditionalService\AdditionalShippingServices;
use YellowCube\WAB\AdditionalService\BasicShippingServices;
use YellowCube\WAB\AdditionalService\DeliveryInstructions;
use YellowCube\WAB\Doc;
use YellowCube\WAB\Order;
use YellowCube\WAB\OrderHeader;
use YellowCube\WAB\Partner;
use YellowCube\Config;
use YellowCube\WAB\Position;

$service = new YellowCube\Service(Config::testConfig());

$partner = new Partner();
$partner
    ->setPartnerType('WE')
    ->setPartnerNo('0000300020')
    ->setPartnerReference('LiiP AG')
    ->setTitle('Madame')
    ->setName1('We Name')
    ->setName2('c/o Cailler')
    ->setStreet('Strasse')
    ->setCountryCode('CH')
    ->setZIPCode('8057')
    ->setCity('Zurich')
    ->setPOBox('po box')
    ->setPhoneNo('0041793020467')
    ->setSMSAvisMobNo('0041793020467')
    ->setFaxNo('0041793020467')
    ->setEmail('name@test.ch')
    ->setLanguageCode('en');

$position = new Position();
$position
    ->setPosNo(10)
    ->setArticleNo('200522004')
    ->setEAN('714718003580')
    ->setPlant('Y010')
    ->setQuantity(1.00)
    ->setQuantityISO('PCE')
    ->setShortDescription('loral Pasty Daisie');

$order = new Order();
$order
    ->setOrderHeader(new OrderHeader('0000040730', \uniqid('yc'), date('Ymd')))
    ->setPartnerAddress($partner)
    ->addValueAddedService(new AdditionalShippingServices())
    ->addValueAddedService(new BasicShippingServices(BasicShippingServices::PRI))
    ->addValueAddedService(new DeliveryInstructions(''))
    ->addOrderPosition($position)
    ->addOrderDocument(Doc::fromFile('LS', 'pdf', 'docs/order/example-file.pdf'));

$response = $service->createYCCustomerOrder($order);
assert($response->isSuccess(), 'Getting status for order failed.');
var_dump($response);

echo "Successfully added order with reference " . $response->getReference();


