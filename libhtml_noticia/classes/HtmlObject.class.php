<?php
    class HtmlObject {
        private $id;
        private $class;
        private $listaAtributos = [];

        function __construct($id=null, $class=null) {
            $this->id = $id;
            $this->class = $class;
        }
        
        function getId() {
            return $this->id;
        }
        
        function getClass() {
            return $this->class;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setClass($class) {
            $this->class = $class;
        }
        
        function addAtributo($atributo) {     
            $this->listaAtributos[] = $atributo;
        }

        function addAtributos($atributos) {
            foreach($atributos as $atributo) {
                $this->listaAtributos[] = $atributo;
            }
        }

        function addArrayAtributos($arrayAtributos) {
            $this->listaAtributos = $arrayAtributos;
        }

        function concatenaAtributos() {
            $atributos='';
            foreach($this->listaAtributos as $atributo) {
                $atributos.= $atributo;
                $atributos.= ' ';
            }
            return $atributos;
        }
    }