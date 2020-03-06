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
       public function getUsuarioName($name){
        try{
         $stm = $this->con->prepare("SELECT *FROM usuario WHERE nombre= ? ");
         $stm->execute(array($name));
         return $stm->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
             echo $e->getMessage();
        }
    }
        public function showDeseos($id){
            $sql="SELECT *FROM articulo a, usuario_articulo ua where a.id_articulo=ua.id_articulo and ua.id_usuario= ?";
            try{
                $stm= $this->con->prepare($sql);
                $stm->execute(array($id));
                return $stm->fetchAll(PDO::FETCH_ASSOC);
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
       public function insertDeseo($id_articulo,$id_user){
           $sql = "INSERT INTO usuario_articulo(`id_usuario`,`id_articulo`) VALUES(?,?)";
            try{
                $stm = $this->con->prepare($sql);
                $stm->execute(array($id_user,$id_articulo));
                return true;
            }catch(PDOException $e){
                echo $e->getMessage().$id_user;
                return false;
            }
       }
       public function deltDeseo($id_usuario,$id_articulo){
        $sqlD="delete from `usuario_articulo` where id_usuario= ? and id_articulo= ?";
        try{
            $stm = $this->con->prepare($sqlD);
            $stm->execute(array(
                $id_usuario,
                $id_articulo
            ));
            return true;
        }catch(PDOException $e){
            return false;
            echo $e->getMessage();
        }
       }
       public function showUser($query){
           $connc=Connection::getConnection();
        $output="";
        if(isset($query))
        {
         //$search = mysqli_real_escape_string($connc,trim($query));
         $query = "
          SELECT * FROM usuario
          WHERE id_usuario LIKE '%".$query."%'
          OR nombre LIKE '%".$query."%' 
          OR apellido LIKE '%".$query."%' 
          OR tipo_usuario LIKE '%".$query."%'
         ";
        }
        else
        {
         $query = "
          SELECT * FROM usuario ORDER BY id_usuario
         ";
        }
        $result="";
        try{
            $result = $this->con->prepare($query);
            $result->execute();
            
        }catch(Exception $e){
            echo $e->getMessage();
        }
        if(!empty($result))
        {
         $output .= '
          <div class="table-responsive">
           <table class="table table bordered">
            <tr>
             <th>ID</th>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Tipo Usuario</th>
            </tr>
         ';
         foreach($result as $row)
         {
          $output .= '
           <tr>
            <td>'.$row["id_usuario"].'</td>
            <td>'.$row["nombre"].'</td>
            <td>'.$row["apellido"].'</td>
            <td>'.$row["tipo_usuario"].'</td>
           </tr>
          ';
         }
         echo $output;
        }
        else
        {
         echo 'Data Not Found';
        }
       }
   } 
?>