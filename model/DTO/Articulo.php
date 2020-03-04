<?php
    class Articulo{
        private $id_articulo;
        private $imagen;
        private $descripcion;
        private $costo;
        private $tipo;
        private $para;

        public function getId(){
            return $this->id_articulo;
        }
        public function getImagen(){
            return $this->imagen;
        }
        public function getDescripcion(){
            return $this->descripcion;
        }
        public function getCosto(){
            return $this->costo;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function getPara(){
            return $this->para;
        }
        public function setId($id){
            $this->id_articulo = $id;
        }
        public function setImagen($imagen){
            $this->imagen = $imagen;
        }
        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }
        public function setCosto($costo){
            $this->costo = $costo;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function setPara($para){
            $this->para = $para;
        }
    }
?>