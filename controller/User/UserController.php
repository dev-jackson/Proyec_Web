<?php
    require_once 'config/config.php';
    require_once 'model/DAO/UsuarioDAO.php';
    require_once 'model/DTO/Usuario.php';
    require_once 'model/DAO/ArticuloDAO.php';
    class UserController{
        private $user;
        private $art;

        public function __construct(){
            $this->user = new UsuarioDAO();
            $this->art = new ArticuloDAO();
        }

        public function login(){
            $nombre = $_POST['username'];
            $clave="";
            if(isset($_POST['pws'])){
                $clave=$_POST['pws'];
            }
            $res=$this->user->validateUsuario($nombre);
            if(empty($res)){
                echo "";
            }elseif(password_verify($clave,$res['clave'])){
                    echo "e";
                    session_start();
                    if($res['tipo_usuario']=="C"){
                        $_SESSION['C']=$res['nombre']; 
                    }else{
                        $_SESSION['A']=$res['nombre'];
                    }
            }else{
                echo "";
            }
        }
        public function registerUser(){
            $u = new Usuario();
            $u->setId($_POST['username']);
            $u->setNombre($_POST['nombre']);
            $u->setApellido($_POST['apellido']);
            $u->setClave($_POST['pws']);
            $u->setTipo('C');
            $this->user->insertUsuario($u);
            $res= $this->user->getUsuario();
            if($res["id_usuario"]=$u->getId()){
                if($res["tipo_usuario"]="C"){
                    session_start();
                    $_SESSION['C']=$u->getNombre();
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
        public function showAllArticulosH(){
            $res = $this->art->getAllArticuloH();
            require_once LIB;
            require_once HEADER;
            require_once "views/dynamic/categoryH.php";
            require_once FOOTER;
        }
        public function showAllArticulosM(){
            $res = $this->art->getAllArticuloM();
            require_once LIB;
            require_once HEADER;
            require_once "views/dynamic/categoryM.php";
            require_once FOOTER;
        }
        public function destroySession(){
            session_start();
            session_destroy();
            header("Location: index.php?");
        }
        
    }
?>