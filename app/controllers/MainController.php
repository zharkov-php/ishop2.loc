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
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [3]);
       // echo __METHOD__;
        $this->setMeta(App::$app->getProperty('shop_name'), 'описание страницы', 'ключевики');
        $names = ['Andrey', 'Danik', 'Zhora'];
        $cacheNames = Cache::instance();
        $cacheNames ->set('test', $names);
        $cacheNames->delete('test');
        $data = $cacheNames->get('test');
        if(!$data){
            $cacheNames->set('test', $names);
        }
        myDebug($data);
        $this->set(compact('posts'));


    }

}