<?php

namespace YellowCube;


/**
 * YellowCube Webservice
 *
 */
class YellowCube_Service extends \YellowCube\Util\SoapClient
{

  /**
   *
   * @var array $classmap The defined classes
   */
  private static $classmap = array (
    'WAB' => 'YellowCube\\WAB',
    'ControlReference' => 'YellowCube\\ControlReference',
    'TransControlID' => 'YellowCube\\TransControlID',
    'Order' => 'YellowCube\\Order',
    'OrderHeader' => 'YellowCube\\OrderHeader',
    'PartnerAddress' => 'YellowCube\\PartnerAddress',
    'Partner' => 'YellowCube\\Partner',
    'ValueAddedServices' => 'YellowCube\\ValueAddedServices',
    'AdditionalService' => 'YellowCube\\AdditionalService',
    'OrderPositions' => 'YellowCube\\OrderPositions',
    'Position' => 'YellowCube\\Position',
    'OrderDocuments' => 'YellowCube\\OrderDocuments',
    'Docs' => 'YellowCube\\Docs',
    'OrderDocFilenames' => 'YellowCube\\OrderDocFilenames',
    'WAR_List' => 'YellowCube\\WAR_List',
    'WAR' => 'YellowCube\\WAR',
    'CustomerOrderList' => 'YellowCube\\CustomerOrderList',
    'GoodsIssueHeader' => 'YellowCube\\GoodsIssueHeader',
    'CustomerOrderHeader' => 'YellowCube\\CustomerOrderHeader',
    'GoodsIssue' => 'YellowCube\\GoodsIssue',
    'CustomerOrderDetail' => 'YellowCube\\CustomerOrderDetail',
    'QuantityUOM' => 'YellowCube\\QuantityUOM',
    'ART' => 'YellowCube\\ART',
    'ArticleList' => 'YellowCube\\ArticleList',
    'Article' => 'YellowCube\\Article',
    'BaseUOM' => 'YellowCube\\BaseUOM',
    'NetWeight' => 'YellowCube\\NetWeight',
    'UnitsOfMeasure' => 'YellowCube\\UnitsOfMeasure',
    'EAN' => 'YellowCube\\EAN',
    'GrossWeight' => 'YellowCube\\GrossWeight',
    'Length' => 'YellowCube\\Length',
    'Width' => 'YellowCube\\Width',
    'Height' => 'YellowCube\\Height',
    'Volume' => 'YellowCube\\Volume',
    'ArticleDescriptions' => 'YellowCube\\ArticleDescriptions',
    'ArticleDescription' => 'YellowCube\\ArticleDescription',
    'BAR' => 'YellowCube\\BAR',
    'GEN_Response' => 'YellowCube\\GEN_Response',
    'GEN_STATUS' => 'YellowCube\\GEN_STATUS',
    'WAR_Request' => 'YellowCube\\WAR_Request',
    'BAR_Request' => 'YellowCube\\BAR_Request',
  );

  /**
   *
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   */
  public function __construct(array $options = array(), $wsdl = '/Users/adri/workspace/yellowcube-php/YellowCubeService_005/YellowCubeService.wsdl')
  {
    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    $options = array_merge(array (
  ), $options);
      var_dump($options);
    parent::__construct($wsdl, array());
  }

  /**
   *
   * @param WAB $WAB
   * @return GEN_Response
   */
  public function CreateYCCustomerOrder(WAB $WAB)
  {
    return $this->__soapCall('CreateYCCustomerOrder', array($WAB));
  }

  /**
   *
   * @param GEN_STATUS $WAB_STATUS
   * @return GEN_Response
   */
  public function GetYCCustomerOrderStatus(GEN_STATUS $WAB_STATUS)
  {
    return $this->__soapCall('GetYCCustomerOrderStatus', array($WAB_STATUS));
  }

  /**
   *
   * @param WAR_Request $WAR_Request
   * @return WAR_List
   */
  public function GetYCCustomerOrderReply(WAR_Request $WAR_Request)
  {
    return $this->__soapCall('GetYCCustomerOrderReply', array($WAR_Request));
  }

  /**
   *
   * @param UNKNOWN $ART
   * @return GEN_Response
   */
  public function InsertArticleMasterData($ART)
  {
    return $this->__soapCall('InsertArticleMasterData', array($ART));
  }

  /**
   *
   * @param GEN_STATUS $ART_STATUS_Request
   * @return GEN_Response
   */
  public function GetInsertArticleMasterDataStatus(GEN_STATUS $ART_STATUS_Request)
  {
    return $this->__soapCall('GetInsertArticleMasterDataStatus', array($ART_STATUS_Request));
  }

  /**
   *
   * @param BAR_Request $BAR_Request
   * @return BAR
   */
  public function GetInventory(BAR_Request $BAR_Request)
  {
    return $this->__soapCall('GetInventory', array($BAR_Request));
  }

}
