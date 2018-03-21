<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 21.03.2018
 * Time: 18:14
 */

namespace app\controllers;


use app\models\AppModel;
use ishop\base\Controller;


class AppController extends Controller
{

    public function __construct($route){
        parent::__construct($route);
        new AppModel();
    }


}