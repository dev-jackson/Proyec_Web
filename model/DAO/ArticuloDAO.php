<?php
    require_once 'model/Connection.php';
    require_once 'model/DTO/Articulo.php';

    class ArticuloDAO{
        private $con;

        public function __construct(){
            try{
                $this->con = Connection::getConnection();
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        public function  getAllArticulo($id){
            $sql = "SELECT a.id_articulo,a.imagen,a.descripcion,a.costo,art.id_tipo,ag.id_genero FROM articulo a, articulo_tipo art, articulo_genero ag WHERE a.id_articulo=art.id_articulo AND a.id_articulo=ag.id_articulo and a.id_articulo=?";
            try{
                $stm = $this->con->prepare($sql);
                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function  getAllArticuloH(){
            $sql = "SELECT a.id_articulo,a.imagen,a.descripcion,a.costo,art.id_tipo,ag.id_genero FROM articulo a, articulo_tipo art, articulo_genero ag WHERE a.id_articulo=art.id_articulo AND a.id_articulo=ag.id_articulo and ag.id_genero=1";
            try{
                $stm = $this->con->prepare($sql);
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function  getAllArticuloM(){
            $sql = "SELECT a.id_articulo,a.imagen,a.descripcion,a.costo,art.id_tipo,ag.id_genero FROM articulo a, articulo_tipo art, articulo_genero ag WHERE a.id_articulo=art.id_articulo AND a.id_articulo=ag.id_articulo and ag.id_genero=2";
            try{
                $stm = $this->con->prepare($sql);
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function newArticulo(Articulo $a){
            $sql="INSERT INTO articulo(imagen,descripcion,costo) VALUES(?,?,?)";
            $sql2="INSERT INTO articulo_tipo(id_articulo,id_tipo) VALUES(?,?)";
            $sql3="INSERT INTO articulo_genero(id_articulo,id_genero) VALUES(?,?)";
            try{
              $stm = $this->con->prepare($sql);
                $stm->execute(array(
                                $a->getImagen(),
                                $a->getDescripcion(),
                                $a->getCosto()
                             ));
                $stm =$this->con->prepare("SELECT * FROM articulo WHERE imagen= ?");
                $stm->execute(array($a->getImagen()));
                $res = $stm->fetch(PDO::FETCH_ASSOC);
                if($a->getTipo()=='Ropa'){
                    $stm= $this->con->prepare($sql2);
                    $stm->execute(array($res['id_articulo'],1));
                }else{ 
                    $stm= $this->con->prepare($sql2);
                    $stm->execute(array($res['id_articulo'],2));
                }
                if($a->getPara()=='Hombre'){
                    $stm= $this->con->prepare($sql3);
                    $stm->execute(array($res['id_articulo'],1));
                }else{
                    $stm= $this->con->prepare($sql3);
                    $stm->execute(array($res['id_articulo'],2));
                }
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        public function deltArticulo($id_art,$id_ge,$id_tipo){
            $sql = "DELETE FROM articulo WHERE id_articulo=?";
            $sql1 = "DELETE FROM articulo_genero WHERE id_articulo= ? and id_genero=?";
            $sql2= "DELETE FROM articulo_tipo WHERE id_articulo=? and id_tipo=?";
            try{
                $stm = $this->con->prepare($sql1);
                $stm->execute(array($id_art,$id_ge));
                $stm = $this->con->prepare($sql2);
                $stm->execute(array($id_art,$id_tipo));
                $stm = $this->con->prepare($sql);
                $stm->execute(array($id_art));
                return true;
            }catch(PDOException $e){
                return false;
                echo $e->getMessage();
            }
        }
        public function UpArticulo(Articulo $art){
            $sql= "UPDATE articulo a set a.imagen=?,a.descripcion=?,a.costo=? where id_articulo=?";
            $sql1 = "UPDATE articulo_tipo art, articulo a set art.id_tipo=?  where a.id_articulo=art.id_articulo and a.id_articulo=?";
            $sql2= "UPDATE articulo_genero ag, articulo a set ag.id_genero=? WHERE ag.id_articulo=a.id_articulo and a.id_articulo=?";
            try{
                $stm = $this->con->prepare($sql);
                $stm->execute(array($art->getImagen(),
                                    $art->getDescripcion(),
                                $art->getCosto(),
                                $art->getId()));
                 if($art->getTipo()=='Ropa'){
                    $stm= $this->con->prepare($sql1);
                    $stm->execute(array(1,$art->getId()));
                }else{ 
                    $stm= $this->con->prepare($sql1);
                    $stm->execute(array(2,$art->getId()));
                }
                if($art->getPara()=='Hombre'){
                    $stm= $this->con->prepare($sql2);
                    $stm->execute(array(1,$art->getId()));
                }else{
                    $stm= $this->con->prepare($sql2);
                    $stm->execute(array(2,$art->getId()));
                }
                return true;
            }catch(PDOException $e){
                return false;
                echo $e->getMessage();
            }
        }
    }
?>