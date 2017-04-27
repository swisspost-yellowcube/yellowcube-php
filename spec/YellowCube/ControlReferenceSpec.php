<?php
namespace spec\YellowCube;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use YellowCube\Config;

class ControlReferenceSpec extends ObjectBehavior
{
    function let(Config $config)
    {
        $config->getSender()->willReturn('SENDER');
        $config->getReceiver()->willReturn('RECEIVER');
        $config->getOperatingMode()->willReturn('P');
        $config->getTimeoutSec()->willReturn(null);
    }

    function it_creates_a_control_reference_by_config(Config $config)
    {
        $cr = $this::fromConfig('WAR', $config);

        $cr->shouldHaveType('YellowCube\ControlReference');
        $cr->getType()->shouldEqual('WAR');
        $cr->getReceiver()->shouldEqual('RECEIVER');
        $cr->getSender()->shouldEqual('SENDER');
        $cr->getTimestamp()->shouldEqual(date('Ymdhis'));
        $cr->getOperatingMode()->shouldEqual('P');
        $cr->getVersion()->shouldEqual('1.0');
        $cr->getCommType()->shouldEqual('SOAP');
    }

    function it_creates_a_control_reference_by_config_in_production_mode(Config $config)
    {
        $config->getOperatingMode()->willReturn('P');

        $this::fromConfig('WAR', $config)
            ->getOperatingMode()->shouldEqual('P');
    }

    function it_creates_a_control_reference_with_timeout(Config $config)
    {
        $config->getTimeoutSec()->willReturn(30);

        $this::fromConfig('WAR', $config)
            ->getTransMaxWait()->shouldEqual(30);
    }
}
