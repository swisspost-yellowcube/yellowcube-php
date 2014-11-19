<?php


 function autoload_5d04c640c6529f465e5767461ba0d027($class)
{
    $classes = array(
        'YellowCube\YellowCube_ServiceCustom' => __DIR__ .'/YellowCube_ServiceCustom.php',
        'YellowCube\WABCustom' => __DIR__ .'/WABCustom.php',
        'YellowCube\ControlReferenceCustom' => __DIR__ .'/ControlReferenceCustom.php',
        'YellowCube\TransControlIDCustom' => __DIR__ .'/TransControlIDCustom.php',
        'YellowCube\OrderCustom' => __DIR__ .'/OrderCustom.php',
        'YellowCube\OrderHeaderCustom' => __DIR__ .'/OrderHeaderCustom.php',
        'YellowCube\PartnerAddressCustom' => __DIR__ .'/PartnerAddressCustom.php',
        'YellowCube\PartnerCustom' => __DIR__ .'/PartnerCustom.php',
        'YellowCube\ValueAddedServicesCustom' => __DIR__ .'/ValueAddedServicesCustom.php',
        'YellowCube\AdditionalServiceCustom' => __DIR__ .'/AdditionalServiceCustom.php',
        'YellowCube\OrderPositionsCustom' => __DIR__ .'/OrderPositionsCustom.php',
        'YellowCube\PositionCustom' => __DIR__ .'/PositionCustom.php',
        'YellowCube\OrderDocumentsCustom' => __DIR__ .'/OrderDocumentsCustom.php',
        'YellowCube\DocsCustom' => __DIR__ .'/DocsCustom.php',
        'YellowCube\OrderDocFilenamesCustom' => __DIR__ .'/OrderDocFilenamesCustom.php',
        'YellowCube\ISOCustom' => __DIR__ .'/ISOCustom.php',
        'YellowCube\EANTypeCustom' => __DIR__ .'/EANTypeCustom.php',
        'YellowCube\WAR_ListCustom' => __DIR__ .'/WAR_ListCustom.php',
        'YellowCube\WARCustom' => __DIR__ .'/WARCustom.php',
        'YellowCube\CustomerOrderListCustom' => __DIR__ .'/CustomerOrderListCustom.php',
        'YellowCube\GoodsIssueHeaderCustom' => __DIR__ .'/GoodsIssueHeaderCustom.php',
        'YellowCube\CustomerOrderHeaderCustom' => __DIR__ .'/CustomerOrderHeaderCustom.php',
        'YellowCube\GoodsIssueCustom' => __DIR__ .'/GoodsIssueCustom.php',
        'YellowCube\CustomerOrderDetailCustom' => __DIR__ .'/CustomerOrderDetailCustom.php',
        'YellowCube\QuantityUOMCustom' => __DIR__ .'/QuantityUOMCustom.php',
        'YellowCube\ARTCustom' => __DIR__ .'/ARTCustom.php',
        'YellowCube\ArticleListCustom' => __DIR__ .'/ArticleListCustom.php',
        'YellowCube\ArticleCustom' => __DIR__ .'/ArticleCustom.php',
        'YellowCube\BaseUOMCustom' => __DIR__ .'/BaseUOMCustom.php',
        'YellowCube\NetWeightCustom' => __DIR__ .'/NetWeightCustom.php',
        'YellowCube\UnitsOfMeasureCustom' => __DIR__ .'/UnitsOfMeasureCustom.php',
        'YellowCube\EANCustom' => __DIR__ .'/EANCustom.php',
        'YellowCube\GrossWeightCustom' => __DIR__ .'/GrossWeightCustom.php',
        'YellowCube\LengthCustom' => __DIR__ .'/LengthCustom.php',
        'YellowCube\WidthCustom' => __DIR__ .'/WidthCustom.php',
        'YellowCube\HeightCustom' => __DIR__ .'/HeightCustom.php',
        'YellowCube\VolumeCustom' => __DIR__ .'/VolumeCustom.php',
        'YellowCube\ArticleDescriptionsCustom' => __DIR__ .'/ArticleDescriptionsCustom.php',
        'YellowCube\ArticleDescriptionCustom' => __DIR__ .'/ArticleDescriptionCustom.php',
        'YellowCube\BARCustom' => __DIR__ .'/BARCustom.php',
        'YellowCube\GEN_ResponseCustom' => __DIR__ .'/GEN_ResponseCustom.php',
        'YellowCube\GEN_STATUSCustom' => __DIR__ .'/GEN_STATUSCustom.php',
        'YellowCube\WAR_RequestCustom' => __DIR__ .'/WAR_RequestCustom.php',
        'YellowCube\BAR_RequestCustom' => __DIR__ .'/BAR_RequestCustom.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5d04c640c6529f465e5767461ba0d027');

// Do nothing. The rest is just leftovers from the code generation.
{
}
