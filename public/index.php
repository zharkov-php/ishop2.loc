<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 19.03.2018
 * Time: 22:22
 */
 require_once dirname(__DIR__) . '/config/init.php';
 require_once LIBS . '/functions.php';
 require_once CONFIG . '/routes.php';

 new \ishop\App();

//тест на дебаг
//myDebug(\ishop\App::$app->getProperties());

//тест на вывод ошибок
//throw new Exception('Страница не найдена!!!', 500);

//тест на маршруты
//myDebug(\ishop\Router::getRoutes());