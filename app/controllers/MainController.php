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
use ishop\Cache;

class MainController extends AppController
{
    public function indexAction(){
    $brands = \R::find('brand', 'LIMIT 3');
   $hits = \R::find('product', "hit = '1' AND status = '1' LIMIT 8");
    //myDebug($brands);
        $this->setMeta(App::$app->getProperty('shop_name'), 'описание страницы', 'ключевики');
        $this->set(compact('brands', 'hits'));


    }

}