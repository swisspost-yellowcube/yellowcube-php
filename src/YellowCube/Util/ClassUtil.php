<?php
/**
 * Created by PhpStorm.
 * User: adri
 * Date: 24.11.14
 * Time: 11:59
 */

namespace YellowCube\Util;


class ClassUtil {

    public static function getClassName($object) {
        $class = new \ReflectionClass($object);

        return $class->getShortName();
    }
}
