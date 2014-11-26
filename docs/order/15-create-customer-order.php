<?php
require __DIR__ . '/../../../../../../vendor/autoload.php';

use YellowCube\WAB\AdditionalService\AdditionalShippingServices;
use YellowCube\WAB\AdditionalService\BasicShippingServices;
use YellowCube\WAB\AdditionalService\DeliveryInstructions;
use YellowCube\WAB\Order;
use YellowCube\WAB\OrderHeader;
use YellowCube\WAB\Partner;
use YellowCube\Config;
use YellowCube\WAB\Position;


### "order-header"
$order = new Order();
$order->setOrderHeader(new OrderHeader(
    '0000040730',   // DepositorNo
    \uniqid('yc'),  // CustomerOrderNo
    date('Ymd')     // CustomerOrderDate
));

### "partner-address"
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

$order->setPartnerAddress($partner);

### "order-position"
$position = new Position();
$position
    ->setPosNo(10)
    ->setArticleNo('200522004')
    ->setEAN('714718003580')
    ->setPlant('Y010')
    ->setQuantity(1.00)
    ->setQuantityISO('PCE')
    ->setShortDescription('loral Pasty Daisie');

$order->addOrderPosition($position);

### "additional-services"
$order
    ->addValueAddedService(new AdditionalShippingServices())
    ->addValueAddedService(new BasicShippingServices(BasicShippingServices::PRI))
    ->addValueAddedService(new DeliveryInstructions(''))
    ->setOrderDocumentsFlag(true);

### "create-order"
$service = new YellowCube\Service(Config::testConfig());
$response = $service->createYCCustomerOrder($order);

echo "Successfully created order with reference {$response->getReference()}" . PHP_EOL . PHP_EOL;

print_r($response);


