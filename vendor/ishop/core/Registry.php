<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 20.03.2018
 * Time: 18:07
 */

namespace ishop;


class Registry
{
use TSingletone;

protected static $properties = [];

public  function setProperty($name, $value){
    self::$properties[$name] = $value;
}

public function getProperty($name){
    if (isset(self::$properties[$name])){
        return self::$properties[$name];
    }
    return null;
}

public function getProperties(){
    return self::$properties;
}
}