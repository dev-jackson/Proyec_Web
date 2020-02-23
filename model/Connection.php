
<?php
require_once "./config/config.php";

class Connection{ // patron de disenio singleton
    private static $connection = null; 
   
   
    private function __construct() {
    }
    
    public static function getConnection(){
        try{
            // si no existe la conexion se crea
            if(!isset(self::$connection)){
                self::$connection=new PDO("mysql:host=" . SERVIDORBD . "; port= ".PUERTO."; dbname=".NOMBREBD.";",USUARIO,PASSWORD);  // se inicializa db con la conexion de tipo PDO a la base de datos (motor mysql)
                self::$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
                self::$connection->exec("set character set utf8");
            }
        }catch(Exception $e){
       
        }
        return self::$connection;
    }
}
?>