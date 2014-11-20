<?php
// Map 'src' and 'lib' folders to the Wsdl2PhpGenerator namespace in your
// favorite PSR-0 compatible classloader or require the files manually.
require __DIR__ . '/../vendor/autoload.php';

use Wsdl2PhpGenerator\Config;

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(new Config(array(
    'inputFile'                      => __DIR__ . '/../YellowCubeService_009/YellowCubeService_extern.wsdl',
    'outputDir'                      => 'gen/YellowCube',
    'verbose'                        => false,
    'namespaceName'                  => 'YellowCube',
    'sharedTypes'                    => true,
    'constructorParamsDefaultToNull' => true,
    'soapClientClass'                => '\\YellowCube\Util\SoapClient'
)));
