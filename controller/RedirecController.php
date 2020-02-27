<?php
    class RedirecController{
        public function __construct(){}
        public function router(){
            $controller = (isset($_REQUEST['c'])) ? $_REQUEST['c']: 'index';
            $action = (isset($_REQUEST['a'])) ? $_REQUEST['a']: 'index';
            $controller strtolower($controller);// converts to lower
            $controller = ucwords($controller).'Controller';
            //redirec
            if(strncmp($controller,'C',1)===0){
                require_once 'controller/Client/'.$controller.'.php';
            }elseif(strncmp($controller,'A',1)===0){
                require_once 'controller/Admin/'.$controller.'.php';
            }else{
                require_once 'controller/User/'.$controller.'.php';
            }
            // create action 

            $controller = new $controller;
            $controller->$action();
        }
    }
?>