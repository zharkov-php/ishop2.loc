<?php

namespace app\controllers\admin;

class MainController extends AppController {

    public function indexAction(){
    $this->setMeta('Моя админка', 'Описание админки', 'ключевики админки НЕ ДОПУСТИМІ!!!');
    }

}