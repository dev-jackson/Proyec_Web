<?php
    require_once 'config/config.php';
    require_once 'model/DAO/UsuarioDAO.php';
    require_once 'model/DTO/Usuario.php';
    class UserController{
        private $user;

        public function __construct(){
            $this->user = new UsuarioDAO();
        }

        public function login(){
            $nombre = $_POST['username'];
            $res=$this->user->validateUsuario($nombre);
            if(!empty($res)){
                echo "";
            }else{
                echo "e";
            }
        }
        public function registerUser(){
            $u = new Usuario();
            $u->setId($_POST['username']);
            $u->setNombre($_POST['nombre']);
            $u->setApellido($_POST['apellido']);
            $u->setClave($_POST['pws']);
            $u->setTipo('U');
            $this->user->insertUsuario($u);
            $res= $this->user->getUsuario();
            if($res["id_usuario"]==$u->getId()){
                if($res["tipo_usuario"]=="U"){
                    session_start();
                    $_SESSION['U']=$u->getNombre();
                    echo "t";
                }else{
                    session_start();
                    $_SESSION['A']=$u->getNombre();
                    echo "t";
                }
            }else{
                echo "";
            }
        }
    }
?>