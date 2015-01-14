<?php
require __DIR__ . '/../vendor/autoload.php';

use YellowCube\WAB\AdditionalService\AdditionalShippingServices;
use YellowCube\WAB\AdditionalService\BasicShippingServices;
use YellowCube\WAB\AdditionalService\CODAccountNo;
use YellowCube\WAB\AdditionalService\CODAmount;
use YellowCube\WAB\AdditionalService\CODRefNo;
use YellowCube\WAB\AdditionalService\DeliveryDate;
use YellowCube\WAB\AdditionalService\DeliveryInstructions;
use YellowCube\WAB\AdditionalService\DeliveryLocation;
use YellowCube\WAB\AdditionalService\DeliveryPeriodeCode;
use YellowCube\WAB\AdditionalService\DeliveryTimeFrom;
use YellowCube\WAB\AdditionalService\DeliveryTimeJIT;
use YellowCube\WAB\AdditionalService\DeliveryTimeTo;
use YellowCube\WAB\AdditionalService\FloorNo;
use YellowCube\WAB\AdditionalService\FrightShippingFlag;
use YellowCube\WAB\AdditionalService\NotificationServiceCode;
use YellowCube\WAB\AdditionalService\NotificationType;
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

$position1 = new Position();
$position1
    ->setPosNo(10)
    ->setArticleNo('20052200')
    ->setEAN('714718003580')
    ->setPlant('Y010')
    ->setQuantity(1.00)
    ->setQuantityISO('PCE')
    ->setShortDescription('First Pasty Daisie');

$position2 = new Position();
$position2
    ->setPosNo(10)
    ->setArticleNo('20052004')
    ->setEAN('714718003580')
    ->setPlant('Y010')
    ->setQuantity(1.00)
    ->setQuantityISO('PCE')
    ->setShortDescription('Another Pasty Daisie');

$order = new Order();
$order
    ->setOrderHeader(new OrderHeader('0000040730', \uniqid('yc'), date('Ymd')))
    ->setPartnerAddress($partner)
    ->addValueAddedService(new AdditionalShippingServices())
    ->addValueAddedService(new BasicShippingServices(BasicShippingServices::PRI))
    ->addValueAddedService(new DeliveryInstructions('ZAW3219;ZAW3222'))
    ->addValueAddedService(new DeliveryLocation('Last house in the street.'))
    ->addValueAddedService(new DeliveryPeriodeCode(DeliveryPeriodeCode::MORNING))
    ->addValueAddedService(new DeliveryTimeFrom('13:00'))
    ->addValueAddedService(new DeliveryTimeTo('15:00'))
    ->addValueAddedService(new DeliveryTimeJIT('14:00'))
    ->addValueAddedService(new DeliveryDate(date('Ymd', strtotime('+4 days'))))
    ->addValueAddedService(new CODAmount('150.00')) // COD amount in CHF (Cash on 153.45 Delivery).
    ->addValueAddedService(new CODAccountNo('010683242'))
    ->addValueAddedService(new CODRefNo('897201301070000097673'))
    ->addValueAddedService(new FrightShippingFlag('1')) // Yes, fright consignment (small consignments).
    ->addValueAddedService(new FloorNo('3'))
    ->addValueAddedService(new NotificationType(NotificationType::EMAIL))
    ->addValueAddedService(new NotificationServiceCode('2'))
    ->addOrderPosition($position1)
    ->addOrderPosition($position2);

$response = $service->createYCCustomerOrder($order);
assert($response->isSuccess(), 'Getting status for order failed.');
var_dump($response);

echo "Successfully added order with reference " . $response->getReference();


