<?php

namespace spec\YellowCube\Util\Logger;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class MinLevelFilterLoggerSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf(
            '\YellowCube\Util\Logger\MinLevelFilterLogger'
        );
    }

    function it_should_fail_with_invalid_loglevel(LoggerInterface $logger)
    {
        $this->shouldThrow('\InvalidArgumentException')->during(
            '__construct',
            array('wrong error level', $logger)
        );
    }

    function it_should_log_included_levels(LoggerInterface $logger)
    {
        $this->beConstructedWith(LogLevel::WARNING, $logger);
        $this->error('test');
        $logger->log(LogLevel::ERROR, 'test', array())->shouldHaveBeenCalled();
    }

    function it_should_not_log_excluded_levels(LoggerInterface $logger)
    {
        $this->beConstructedWith(LogLevel::WARNING, $logger);
        $this->notice('test');
        $logger->log(LogLevel::NOTICE, 'test', array())->shouldNotHaveBeenCalled();
    }
}
