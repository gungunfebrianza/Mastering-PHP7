<?php
class StaticExample
{
    public static $aNum = 0;
    public static function sayHello()
    {
        print "hello";
    }
}

print StaticExample::$aNum;
StaticExample::sayHello();
