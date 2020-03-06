<?php
    require_once 'config/config.php';
    require_once 'model/DTO/Articulo.php';
    require_once 'model/DAO/ArticuloDAO.php';
    require_once 'model/DTO/Usuario.php';
    require_once 'model/DAO/UsuarioDAO.php';
    class AdminController{
        private $art;
        private $usr;
        public function __construct(){
            $this->art = new ArticuloDAO();
            $this->usr = new UsuarioDAO();
        }
        public function AddArticulo(){
            $a = new Articulo();
            $Imagen = $_FILES;
            $ruta = "assets/img/".$Imagen['imagen']['name'];
            if(file_exists($ruta)){
            }else{
                move_uploaded_file($Imagen['imagen']['tmp_name'],$ruta);
            }
            $descript = $_POST['descript'];
                $costo = $_POST['costo'];
                $tipo = $_POST["radio-group1"];
                $para = $_POST['radio-group'];
                $a->setImagen($ruta);
                $a->setDescripcion($descript);
                $a->setCosto($costo);
                $a->setTipo($tipo);
                $a->setPara($para);
                
                $resul=$this->art->newArticulo($a);
                if($resul){
                    echo 't';
                }else{
                    echo '';
                }
        }
        public function deleteArticulo(){
            $id_art = $_POST['id_art'];
            $id_ge =$_POST['id_ge'];
            $id_tipo = $_POST['id_tipo'];
            $resul=$this->art->deltArticulo($id_art,$id_ge,$id_tipo);
            if($resul){
                echo "t";
            }else{
                echo "";
            }
        }
        public function UpdateArticulo(){
            $res= $this->art->getAllArticulo($_REQUEST['id_art']);
            include_once LIB;
            include_once 'views/dynamic/CrearArticulo.php';
        }
        public function UpdateArt(){
            $a = new Articulo();
            $ruta;
            if(isset($_FILES['imagen'])){
            $Imagen = $_FILES;
            $ruta = "assets/img/".$Imagen['imagen']['name'];
            }else{
            $ruta="assets/img/".$_POST['imagen_text'];
            }
            if(file_exists($ruta)){
            }else{
                
                move_uploaded_file($Imagen['imagen']['tmp_name'],$ruta);
            }
            $descript = $_POST['descript'];
                $costo = $_POST['costo'];
                $tipo = $_POST["radio-group1"];
                $para = $_POST['radio-group'];
                $id=$_POST['id_arti'];
                $a->setId($id);
                $a->setImagen($ruta);
                $a->setDescripcion($descript);
                $a->setCosto($costo);
                $a->setTipo($tipo);
                $a->setPara($para);
                $resul=$this->art->UpArticulo($a);
                if($resul){
                    echo 't';
                }else{
                    echo '';
                }
        }
        public function showUsers(){
            $query="";
            if(isset($_POST['query'])){
                $query = $_POST['query']; 
            }
            $this->usr->showUser($query);
        }
    }
?>