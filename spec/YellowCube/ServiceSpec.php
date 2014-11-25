<?php

namespace spec\YellowCube;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ServiceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('YellowCube\Service');
    }

    function it_asserts_config_is_given()
    {
        $this->shouldThrow('PhpSpec\Exception\Example\ErrorException')->during('__construct', array(''));
    }
}
