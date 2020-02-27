<?php
    class IndexController{
        public __construct(){}

        public function index(){
            //don't exits static footer and header
            require_once 'view/index.php'; 
        }
    }
?>