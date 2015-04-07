<?php
namespace spec\YellowCube\Util;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SoapClientSpec extends ObjectBehavior
{
    function let() {
        $wsdl = 'https://service.swisspost.ch/apache/yellowcube/?wsdl';
        $this->beConstructedWith($wsdl, array());
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('YellowCube\Util\SoapClient');
    }
}
