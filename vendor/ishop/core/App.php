<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 20.03.2018
 * Time: 17:59
 */

namespace ishop;


class App
{
    public static $app;

    public function __construct()
    {
    //echo "Hello world";
        //при любом запросе убираю слеш
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::instance();
        $this->getParams();
    }

    protected function getParams(){
        $params = require_once CONFIG . '/params.php';
        if (!empty($params)){
            foreach ($params as $k => $v){
                self::$app->setProperty($k, $v);
            }
        }
    }

}