<?php
/**
 * Created by PhpStorm.
 * User: adri
 * Date: 24.11.14
 * Time: 17:06
 */

namespace spec\YellowCube;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use YellowCube\Config;

class ControlReferenceSpec extends ObjectBehavior
{
    function let(Config $config) {
        $config->getSender()->willReturn('SENDER');
        $config->getReceiver()->willReturn('RECEIVER');
        $config->isDebugMode()->willReturn(true);
    }

    function it_creates_a_control_reference_by_config(Config $config) {
        $cr = $this::fromConfig('WAR', $config);

        $cr->shouldHaveType('YellowCube\ControlReference');
        $cr->getType()->shouldEqual('WAR');
        $cr->getReceiver()->shouldEqual('RECEIVER');
        $cr->getSender()->shouldEqual('SENDER');
        $cr->getTimestamp()->shouldEqual(date('Ymdhis'));
        $cr->getOperatingMode()->shouldEqual('T');
        $cr->getVersion()->shouldEqual('1.0');
        $cr->getCommType()->shouldEqual('SOAP');
    }

    function it_creates_a_control_reference_by_config_in_production_mode(Config $config) {
        $config->isDebugMode()->willReturn(false);

        $this::fromConfig('WAR', $config)
            ->getOperatingMode()->shouldEqual('P');
    }

}
