<?php
namespace YellowCube\Util;

/**
 * Provides method to retrieve information from classes
 * and objects.
 *
 * @package YellowCube\Util
 */
class ClassUtil
{
    /**
     * Returns the unqualified class name for specified object.
     *
     * @param \stdClass $object Any object.
     *
     * @return string Unqualified class name.
     */
    public static function getClassName($object)
    {
        $class = new \ReflectionClass($object);

        return $class->getShortName();
    }
}
