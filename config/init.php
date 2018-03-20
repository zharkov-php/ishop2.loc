<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 19.03.2018
 * Time: 22:33
 */
define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ishop/core');
define("LIBS", ROOT . '/vendor/ishop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'default');

//http://ishop2.loc/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";


//http://ishop2.loc/public/
//вырезаем с конца index.php
$app_path = preg_replace("#[^/]+$#", '', $app_path);


//http://ishop2.loc/
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

//include autoload
require_once ROOT . '/vendor/autoload.php';