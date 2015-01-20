<?php
/**
 * This file can be used to require this projects dependencies
 * without the support for an PSR-0 compliant auto loader.
 *
 * Example usage:
 * <code>
 * require_once  'path/to/yellowcube/require-lib.php';
 * </code>
 */

$baseDir = __DIR__;
$vendorDir = __DIR__ . '/vendor';

require_once $vendorDir . '/beberlei/assert/lib/Assert/functions.php';
require_once $vendorDir . '/beberlei/assert/lib/Assert/Assertion.php';
require_once $vendorDir . '/beberlei/assert/lib/Assert/AssertionChain.php';
require_once $vendorDir . '/beberlei/assert/lib/Assert/AssertionFailedException.php';
require_once $vendorDir . '/beberlei/assert/lib/Assert/InvalidArgumentException.php';
require_once $vendorDir . '/beberlei/assert/lib/Assert/LazyAssertion.php';
require_once $vendorDir . '/beberlei/assert/lib/Assert/LazyAssertionException.php';
require_once $baseDir . '/src/YellowCube/Service.php';
require_once $baseDir . '/src/YellowCube/Util/ClassUtil.php';
require_once $baseDir . '/src/YellowCube/Util/SimpleValue.php';
require_once $baseDir . '/src/YellowCube/Util/SoapClient.php';
require_once $baseDir . '/src/YellowCube/ART/Article.php';
require_once $baseDir . '/src/YellowCube/ART/ArticleDescription.php';
require_once $baseDir . '/src/YellowCube/ART/ChangeFlag.php';
require_once $baseDir . '/src/YellowCube/ART/UnitsOfMeasure/UnitOfMeasure.php';
require_once $baseDir . '/src/YellowCube/ART/UnitsOfMeasure/AltDenominatorUOM.php';
require_once $baseDir . '/src/YellowCube/ART/UnitsOfMeasure/AltNumeratorUOM.php';
require_once $baseDir . '/src/YellowCube/ART/UnitsOfMeasure/AlternateUnitISO.php';
require_once $baseDir . '/src/YellowCube/ART/UnitsOfMeasure/Dimension.php';
require_once $baseDir . '/src/YellowCube/ART/UnitsOfMeasure/EAN.php';
require_once $baseDir . '/src/YellowCube/ART/UnitsOfMeasure/EANType.php';
require_once $baseDir . '/src/YellowCube/ART/UnitsOfMeasure/GrossWeight.php';
require_once $baseDir . '/src/YellowCube/ART/UnitsOfMeasure/Height.php';
require_once $baseDir . '/src/YellowCube/ART/UnitsOfMeasure/ISO.php';
require_once $baseDir . '/src/YellowCube/ART/UnitsOfMeasure/Length.php';
require_once $baseDir . '/src/YellowCube/ART/UnitsOfMeasure/Volume.php';
require_once $baseDir . '/src/YellowCube/ART/UnitsOfMeasure/Width.php';
require_once $baseDir . '/src/YellowCube/ART/NetWeight.php';
require_once $baseDir . '/src/YellowCube/BAR/Article.php';
require_once $baseDir . '/src/YellowCube/BAR/QuantityUOM.php';
require_once $baseDir . '/src/YellowCube/Config.php';
require_once $baseDir . '/src/YellowCube/ControlReference.php';
require_once $baseDir . '/src/YellowCube/GEN_Response.php';
require_once $baseDir . '/src/YellowCube/GEN_STATUS.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/AdditionalService.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/AdditionalShippingServices.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/BasicShippingServices.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/CODAccountNo.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/CODAmount.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/CODRefNo.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/DeliveryDate.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/DeliveryInstructions.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/DeliveryLocation.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/DeliveryPeriodeCode.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/DeliveryTimeFrom.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/DeliveryTimeJIT.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/DeliveryTimeTo.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/FloorNo.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/FrightShippingFlag.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/NotificationServiceCode.php';
require_once $baseDir . '/src/YellowCube/WAB/AdditionalService/NotificationType.php';
require_once $baseDir . '/src/YellowCube/WAB/Doc.php';
require_once $baseDir . '/src/YellowCube/WAB/Order.php';
require_once $baseDir . '/src/YellowCube/WAB/OrderDocFilename.php';
require_once $baseDir . '/src/YellowCube/WAB/OrderHeader.php';
require_once $baseDir . '/src/YellowCube/WAB/Partner.php';
require_once $baseDir . '/src/YellowCube/WAB/Position.php';
require_once $baseDir . '/src/YellowCube/WAR/GoodsIssue/CustomerOrderDetail.php';
require_once $baseDir . '/src/YellowCube/WAR/GoodsIssue/CustomerOrderHeader.php';
require_once $baseDir . '/src/YellowCube/WAR/GoodsIssue/GoodsIssue.php';
require_once $baseDir . '/src/YellowCube/WAR/GoodsIssue/GoodsIssueHeader.php';
