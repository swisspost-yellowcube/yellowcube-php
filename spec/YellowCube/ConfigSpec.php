<?php

namespace spec\YellowCube;

use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamFile;
use PhpSpec\ObjectBehavior;
use YellowCube\Config;

class ConfigSpec extends ObjectBehavior
{
    /**
     * @var string
     */
    private $certFilePath;

    function let()
    {
        $this->beConstructedWith('YCTest');
        $root = vfsStream::setup('test');
        $this->certFilePath = vfsStream::newFile('foo.txt')->at($root)->url();
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
        if (PHP_MAJOR_VERSION >= 7) {
            $this->shouldThrow('\TypeError')->during(
                '__construct',
                array('sender', 'wsdl', null, 'false', '')
            );
        } else {
            $this->shouldThrow('PhpSpec\Exception\Example\ErrorException')->during(
                '__construct',
                array('sender', 'wsdl', null, 'false', '')
            );
        }
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

    function it_does_not_allow_empty_certificate()
    {
        $this->shouldThrow('InvalidArgumentException')->during('setCertificateFilePath', array(''));
    }

    function it_sets_certificate_without_passphrase()
    {
        $this->setCertificateFilePath($this->certFilePath);
        $this->getCertificateFilePath()->shouldReturn($this->certFilePath);
    }

    function it_sets_certificate_with_passphrase()
    {
        $this->setCertificateFilePath($this->certFilePath, 'pass-phrase');
        $this->getCertificateFilePath()->shouldReturn($this->certFilePath);
        $this->getCertificatePassphrase()->shouldReturn('pass-phrase');
    }
}
