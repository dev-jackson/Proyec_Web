<?php
    require_once 'model/Connection.php';
    require_once 'model/Articulo.php';

    class ArticuloDAO{
        private $con;

        public function __construct(){
            try{
                $this->con = Connection::getConnection();
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        public function  getAllArticulo(){
            $sql = "SELECT * FROM articulo";
            try{
                $stm = $this->con->prepare($sql);
                $stm->execute();
                return $stm->fetch(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
    }
?>