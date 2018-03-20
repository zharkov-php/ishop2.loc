<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 20.03.2018
 * Time: 19:27
 */

namespace ishop;


class ErrorHandler{

    public function __construct()
    {
        if (DEBUG){
            error_reporting(-1);
        }else{
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function exceptionHandler($e){
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    //запись ошибок в errors.log
    protected function logErrors($massage = '', $file = '', $line = ''){
    error_log("[" . date('Y-m-d H:i:s') .
        "] Текст ошибки: {$massage} | Файл: {$file} | Строка: {$line}
        \n===============================================\n",
         3,  ROOT . '/tmp/errors.log');
    }

    //показ ошибок
    protected function displayError($errno, $errstr, $errfile, $errline, $responce = 404){

        //оправляем заголовок
        http_response_code($responce);
        if ($responce == 404 && !DEBUG){
            require WWW . '/errors/404.php';
            die;
        }
        //если DEBUG - мы разаработке
        if (DEBUG){
            require WWW . '/errors/dev.php';

            //иначе  в продакшене
        }else{
            require WWW . '/errors/prod.php';
        }
        die;


    }

}