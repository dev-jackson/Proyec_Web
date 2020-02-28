<?php
    require_once 'config/config.php';
    class IndexController{
        public function __construct(){}

        public function index(){
            //don't exits static footer and header
            require_once LIB;
            require_once HEADER;
            require_once 'views/static/inicio.php'; 
            require_once FOOTER;
        }
    }
?>