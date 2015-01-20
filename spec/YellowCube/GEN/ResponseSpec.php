<?php

namespace spec\YellowCube;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GEN_ResponseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('YellowCube\GEN_Response');
    }

    function it_should_return_pending_when_status_less_than_100()
    {
        $statusType = 'S';
        $statusCode = 10;
        $this->beConstructedWith(null, null, $statusCode, $statusType);

        $this->isPending()->shouldReturn(true);
    }

    function it_should_return_not_pending_when_status_100()
    {
        $statusType = 'S';
        $statusCode = 100;
        $this->beConstructedWith(null, null, $statusCode, $statusType);

        $this->isPending()->shouldReturn(false);
    }

    function it_should_return_not_pending_when_status_greater_than_100()
    {
        $statusType = 'S';
        $statusCode = 1000;
        $this->beConstructedWith(null, null, $statusCode, $statusType);

        $this->isPending()->shouldReturn(false);
    }

    function it_should_return_not_pending_when_error()
    {
        $statusType = 'E';
        $this->beConstructedWith(null, null, null, $statusType);

        $this->isPending()->shouldReturn(false);
    }
}
