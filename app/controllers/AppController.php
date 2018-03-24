<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 21.03.2018
 * Time: 18:14
 */

namespace app\controllers;


use app\models\AppModel;
use app\widgets\currency\Currency;
use ishop\App;
use ishop\base\Controller;


class AppController extends Controller
{

    public function __construct($route){
        parent::__construct($route);
        new AppModel();
        setcookie('currency', 'EUR', time() + 3600*24*7, '/');
        App::$app->setProperty('currencies', Currency::getCurrencies());
        App::$app->setProperty('currency', Currency::getCurrency(App::$app->getProperty('currencies')));
        myDebug(App::$app->getProperties());
    }


}