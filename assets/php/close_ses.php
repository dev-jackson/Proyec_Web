<?php
    include_once("../header.php");
    try{
        session_start();
        session_destroy();
    }catch(Exeption $e){
        echo $e;
    }
    header('Location: /Proyect_Web/index.php');
?>