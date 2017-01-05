<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 05/01/2017
 * Time: 14:25
 * */
class autoload
{
    private static $classDirectory ='./classes/';
    public static function classesAutoloader($class) {
        $path = static::$classDirectory . "$class.php";
        if (file_exists($path) && is_readable($path)) require $path;
    }

}