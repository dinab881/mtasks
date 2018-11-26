<?php

/**
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 22:45
 */
class StaticObjectClass
{
    public static $static_prop = 'static property';
    public $object_prop = 'object property';

    public static function static_method(): string
    {
        return 'static method()';
    }

    public function object_method(): string
    {
        return 'object method()';
    }
}
/*
$object = new StaticObjectClass();
echo $object->object_method();
echo StaticObjectClass::static_method();

$object2 = new StaticObjectClass();
$object2::$static_prop = 'static property from object';
echo $object2::$static_prop;
echo '</br>';
StaticObjectClass::$static_prop = 'static again';
echo $object::$static_prop;
*/

class A
{
    public static function getMessage():string
    {
        return 'message - '.static::getString();
    }
    protected static function getString(): string
    {
        return 'classA';
    }
}

class B extends A
{
    protected static function getString(): string{
        return 'classB';
    }
}

echo PHP_EOL;
echo A::getMessage();
echo B::getMessage();