<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 21.03.2018
 * Time: 16:53
 */

namespace app\controllers;


use app\controllers\AppController;
use ishop\App;

class MainController extends AppController
{
    public function indexAction(){
       // echo __METHOD__;
        $this->setMeta(App::$app->getProperty('shop_name'), 'описание страницы', 'ключевики');
    }

}