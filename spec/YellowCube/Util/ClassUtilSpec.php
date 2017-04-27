<?php
namespace spec\YellowCube\Util;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use YellowCube\Util\ClassUtil;

class ClassUtilSpec extends ObjectBehavior
{
    function it_should_return_class_name_for_stdClass()
    {
        $this::getClassName(new \stdClass())->shouldReturn('stdClass');
    }
    function it_should_return_class_name_for_itself()
    {
        $this::getClassName(new ClassUtil())->shouldReturn('ClassUtil');
    }
}
