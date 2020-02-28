<?php
    class Usuario{
        private $id_usaurio;
        private $nombre;
        private $apellido;
        private $clave;
        private $tipo_usuario;

             
        function getId() {
            return $this->id_usuario;
        }

        function getNombre() {
            return $this->nombre;
        }

        function getApellido() {
            return $this->apellido;
        }
        

        function getClave() {
            return $this->clave;
        }

        function getTipo() {
            return $this->tipo_usuario;
        }
        function setId($id) {
            $this->id_usuario = $id;
        }
        function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        function setApellido($apellido) {
            $this->apellido = $apellido;
        }
        function setClave($clave) {
            $this->clave = password_hash($clave,PASSWORD_DEFAULT,['cost' => 10]);;
        }
        function setTipo($rol) {
            $this->tipo_usuario = $rol;
        }

    }
?>