<?php

namespace YellowCube;


/**
 * YellowCube Webservice
 * 
 */
class YellowCube_ServiceCustom extends \YellowCube\Util\SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   */
  private static $classmap = array (
    'WAB' => 'YellowCube\\WABCustom',
    'ControlReference' => 'YellowCube\\ControlReferenceCustom',
    'TransControlID' => 'YellowCube\\TransControlIDCustom',
    'Order' => 'YellowCube\\OrderCustom',
    'OrderHeader' => 'YellowCube\\OrderHeaderCustom',
    'PartnerAddress' => 'YellowCube\\PartnerAddressCustom',
    'Partner' => 'YellowCube\\PartnerCustom',
    'ValueAddedServices' => 'YellowCube\\ValueAddedServicesCustom',
    'AdditionalService' => 'YellowCube\\AdditionalServiceCustom',
    'OrderPositions' => 'YellowCube\\OrderPositionsCustom',
    'Position' => 'YellowCube\\PositionCustom',
    'OrderDocuments' => 'YellowCube\\OrderDocumentsCustom',
    'Docs' => 'YellowCube\\DocsCustom',
    'OrderDocFilenames' => 'YellowCube\\OrderDocFilenamesCustom',
    'WAR_List' => 'YellowCube\\WAR_ListCustom',
    'WAR' => 'YellowCube\\WARCustom',
    'CustomerOrderList' => 'YellowCube\\CustomerOrderListCustom',
    'GoodsIssueHeader' => 'YellowCube\\GoodsIssueHeaderCustom',
    'CustomerOrderHeader' => 'YellowCube\\CustomerOrderHeaderCustom',
    'GoodsIssue' => 'YellowCube\\GoodsIssueCustom',
    'CustomerOrderDetail' => 'YellowCube\\CustomerOrderDetailCustom',
    'QuantityUOM' => 'YellowCube\\QuantityUOMCustom',
    'ART' => 'YellowCube\\ARTCustom',
    'ArticleList' => 'YellowCube\\ArticleListCustom',
    'Article' => 'YellowCube\\ArticleCustom',
    'BaseUOM' => 'YellowCube\\BaseUOMCustom',
    'NetWeight' => 'YellowCube\\NetWeightCustom',
    'UnitsOfMeasure' => 'YellowCube\\UnitsOfMeasureCustom',
    'EAN' => 'YellowCube\\EANCustom',
    'GrossWeight' => 'YellowCube\\GrossWeightCustom',
    'Length' => 'YellowCube\\LengthCustom',
    'Width' => 'YellowCube\\WidthCustom',
    'Height' => 'YellowCube\\HeightCustom',
    'Volume' => 'YellowCube\\VolumeCustom',
    'ArticleDescriptions' => 'YellowCube\\ArticleDescriptionsCustom',
    'ArticleDescription' => 'YellowCube\\ArticleDescriptionCustom',
    'BAR' => 'YellowCube\\BARCustom',
    'GEN_Response' => 'YellowCube\\GEN_ResponseCustom',
    'GEN_STATUS' => 'YellowCube\\GEN_STATUSCustom',
    'WAR_Request' => 'YellowCube\\WAR_RequestCustom',
    'BAR_Request' => 'YellowCube\\BAR_RequestCustom',
  );

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   */
  public function __construct(array $options = array(), $wsdl = './YellowCubeService_005/YellowCubeService.wsdl')
  {
    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    $options = array_merge(array (
  ), $options);
    parent::__construct($wsdl, $options);
  }

  /**
   * 
   * @param WABCustom $WAB
   * @return GEN_Response
   */
  public function CreateYCCustomerOrder($WAB)
  {
    return $this->__soapCall('CreateYCCustomerOrder', array($WAB));
  }

  /**
   * 
   * @param GEN_STATUSCustom $WAB_STATUS
   * @return GEN_Response
   */
  public function GetYCCustomerOrderStatus($WAB_STATUS)
  {
    return $this->__soapCall('GetYCCustomerOrderStatus', array($WAB_STATUS));
  }

  /**
   * 
   * @param WAR_RequestCustom $WAR_Request
   * @return WAR_List
   */
  public function GetYCCustomerOrderReply($WAR_Request)
  {
    return $this->__soapCall('GetYCCustomerOrderReply', array($WAR_Request));
  }

  /**
   * 
   * @param ARTCustom $ART
   * @return GEN_Response
   */
  public function InsertArticleMasterData($ART)
  {
    return $this->__soapCall('InsertArticleMasterData', array($ART));
  }

  /**
   * 
   * @param GEN_STATUSCustom $ART_STATUS_Request
   * @return GEN_Response
   */
  public function GetInsertArticleMasterDataStatus($ART_STATUS_Request)
  {
    return $this->__soapCall('GetInsertArticleMasterDataStatus', array($ART_STATUS_Request));
  }

  /**
   * 
   * @param BAR_RequestCustom $BAR_Request
   * @return BAR
   */
  public function GetInventory($BAR_Request)
  {
    return $this->__soapCall('GetInventory', array($BAR_Request));
  }

}
