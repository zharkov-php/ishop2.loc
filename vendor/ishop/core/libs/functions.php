<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 20.03.2018
 * Time: 18:29
 */
function myDebug($arr){
    echo '<pre>';
    echo print_r($arr, 'true');
    echo '<pre>';
}
function redirect($http = false){
    if($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit;
}