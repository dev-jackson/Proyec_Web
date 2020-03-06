<?php
    class Cookies{
        public $cook;
        public function createCoookie(){
            $cook= $_COOKIE;
            print_r($cook);
        }
    }
?>