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
        public function static(){
            $page = $_REQUEST['p'];
            require_once LIB;
            require_once HEADER;
            require_once 'views/static/'.$page.'.php';
            require_once FOOTER;   
        }
        public function dynamic(){
            $page = $_REQUEST['p'];
            if($page=='registrar'||$page=='login'){
                require_once LIB;
                require_once 'views/dynamic/'.$page.'.php';
            }else{
                require_once LIB;
                require_once HEADER;
                require_once 'views/dynamic/'.$page.'.php';
                require_once FOOTER;
            }
            
            
        }
    }
?>