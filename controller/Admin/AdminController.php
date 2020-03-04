<?php
    require_once 'config/config.php';
    require_once 'model/DTO/Articulo.php';
    require_once 'model/DAO/ArticuloDAO.php';
    class AdminController{
        private $art;
        public function __construct(){
            $this->art = new ArticuloDAO();
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
    }
?>