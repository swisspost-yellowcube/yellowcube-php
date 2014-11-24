<?php

namespace spec\YellowCube;

use PhpSpec\ObjectBehavior;

class ConfigSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('YCTest', 'test.wsdl');
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

    function it_asserts_debug_mode_is_boolean()
    {
        $this->shouldThrow('InvalidArgumentException')->during(
            '__construct',
            array('sender', 'wsdl', 'false')
        );
    }

    function it_asserts_soapclientoptions_is_an_array()
    {
        $this->shouldThrow('PhpSpec\Exception\Example\ErrorException')->during(
            '__construct',
            array('sender', 'wsdl', 'false', '')
        );
    }

    function it_asserts_a_receiver_is_given()
    {
        $this->shouldThrow('InvalidArgumentException')->during(
            '__construct',
            array('sender', 'wsdl', false, array(), '')
        );
    }

    function it_returns_correct_defaults()
    {
        $this->getSender()->shouldReturn('YCTest');
        $this->getWSDL()->shouldReturn('test.wsdl');
        $this->getReceiver()->shouldReturn('YELLOWCUBE');
        $this->isDebugMode()->shouldReturn(false);
    }
}
