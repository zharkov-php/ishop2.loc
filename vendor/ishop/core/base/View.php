<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 21.03.2018
 * Time: 18:25
 */

namespace ishop\base;


class View
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = [];


    public function __construct($rout, $layout = '', $view = '', $meta )
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $view;
        $this->model = $route['controller'];
        $this->prefix = $route['prefix'];
        $this->meta = $meta;
        if ($layout === false){
            $this->layout = false;
        }else{
            $this->layout = $layout ?: LAYOUT;
        }
    }



}