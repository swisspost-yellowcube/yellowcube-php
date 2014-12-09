<?php

namespace spec\YellowCube;

use PhpSpec\ObjectBehavior;
use YellowCube\Config;

class ConfigSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('YCTest');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('YellowCube\Config');
    }

    function it_asserts_a_sender_is_given()
    {
        $this->shouldThrow('InvalidArgumentException')->during('__construct', array('', 'wsdl'));
    }

    function it_asserts_a_wsdl_is_given()
    {
        $this->shouldThrow('InvalidArgumentException')->during('__construct', array('sender', ''));
    }

    function it_asserts_a_timeout_is_given()
    {
        $this->shouldThrow('InvalidArgumentException')->during('__construct', array('sender', 'wsdl', '1 sec'));
    }

    function it_asserts_operating_mode_is_string()
    {
        $this->shouldThrow('InvalidArgumentException')->during(
            '__construct',
            array('sender', 'wsdl', null, 'Other')
        );
    }

    function it_asserts_soapclientoptions_is_an_array()
    {
        $this->shouldThrow('PhpSpec\Exception\Example\ErrorException')->during(
            '__construct',
            array('sender', 'wsdl', null, 'false', '')
        );
    }

    function it_asserts_a_receiver_is_given()
    {
        $this->shouldThrow('InvalidArgumentException')->during(
            '__construct',
            array('sender', 'wsdl', null, false, array(), '')
        );
    }

    function it_returns_correct_defaults()
    {
        $this->getSender()->shouldReturn('YCTest');
        $this->getWSDL()->shouldReturn(Config::WSDL_PRODUCTION);
        $this->getReceiver()->shouldReturn('YELLOWCUBE');
        $this->getOperatingMode()->shouldReturn('P');
        $this->getTimeoutSec()->shouldReturn(null);
    }

    function it_returns_test_wsdl_in_operating_mode()
    {
        $this->beConstructedWith('YCTest', null, null, 'D');
        $this->getWSDL()->shouldReturn(Config::WSDL_TEST);
    }
}
