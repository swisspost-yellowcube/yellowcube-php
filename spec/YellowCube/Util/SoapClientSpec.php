<?php
namespace spec\YellowCube\Util;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Psr\Log\LoggerInterface;

class SoapClientSpec extends ObjectBehavior
{
    function let(LoggerInterface $logger)
    {
        $wsdl = 'https://service.swisspost.ch/apache/yellowcube/?wsdl';
        $this->beConstructedWith($wsdl, array(), $logger);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('YellowCube\Util\SoapClient');
    }
}
