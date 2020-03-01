<?php
    require_once 'model/Connection.php';
    require_once 'model/DTO/Usuario.php';
   class UsuarioDAO{
       private $con;

       public function __construct(){
            try{
                $this->con = Connection::getConnection();
            }catch(Exception $e){
                echo $e->getMessage();
            }
       }
       public function getUsuario(){
           try{
            $stm = $this->con->prepare("SELECT *FROM usuario");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_ASSOC);
           }catch(PDOException $e){
                echo $e->getMessage();
           }
       }
       public function validateUsuario($id){
            try{
                $stm =$this->con->prepare("SELECT *FROM usuario WHERE id_usuario= ? ");
                $stm->execute(array($id ));
                return $stm->fetch(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                echo $e->getMessage();
            }
       }
       public function insertUsuario(Usuario $u){
           try{
                $stm = $this->con->prepare("INSERT INTO usuario(id_usuario,nombre,apellido,clave,tipo_usuario) VALUES(?,?,?,?,?)");
                $stm->execute(array(
                    $u->getId(),
                    $u->getNombre(),
                    $u->getApellido(),
                    $u->getClave(),
                    $u->getTipo()
                ));
                //return $stm->fetch(PDO::FETCH_ASSOC);  
           }catch(Exception $e){
            echo $e->getMessage();
           }
       }
   } 
?>