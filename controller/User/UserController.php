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
        
        }
        public function registerUser(){
            $u = new Usuario();
            $u->setId($_POST['id']);
            $u->setNombre($_POST['nombre']);
            $u->setApellido($_POST['nombre']);
            $u->setClave($_POST['clave']);
            $u->setTipo('U');
            $this->user->insertUsuario($u);
        }
    }
?>