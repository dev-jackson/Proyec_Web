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
        public function deleteDeseo(){
            $id_usuario=$_POST['id_usuario'];
            $id_articulo=$_POST['id_art'];
            $result=$this->user->deltDeseo($id_usuario,$id_articulo);
            if($result){
                echo "t";
            }else{
                echo "";
            }
        }
        public function accesCookies(){
            $ip=$_POST['IP'];
            $port=$_POST['SP'];
            $server_name=$_POST["PX"];
        }
    }
?>