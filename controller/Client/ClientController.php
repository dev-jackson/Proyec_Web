<?php
    require_once 'config/config.php';
    require_once 'model/DAO/ArticuloDAO.php';
    require_once 'model/DTO/Articulo.php';
    require_once 'model/DAO/UsuarioDAO.php';
    require_once 'model/DTO/Usuario.php';
    class ClientController{
        private $art;
        private $user;
        public function __construct(){
            $this->art = new ArticuloDAO();
            $this->user = new UsuarioDAO();
        }
        public function AgregarDeseos(){
            $name= $_POST['name'];
            $res=$this->user->getUsuarioName($name);
            echo($res['id_usuario']);
            $id_articulo= $_POST['id_art'];
            $ban=$this->user->insertDeseo($id_articulo,$res['id_usuario']);
            if($ban){
                echo "t";
            }else{
                echo "";
            }
        }
        public function AllDeseos(){
            $name=$_GET['name'];
            $res=$this->user->getUsuarioName($name);
            $result=$this->user->showDeseos($res['id_usuario']);
            require_once LIB;
            require_once HEADER;
            require_once 'views/dynamic/MisDeseos.php';
            require_once FOOTER;
        }
    }
?>