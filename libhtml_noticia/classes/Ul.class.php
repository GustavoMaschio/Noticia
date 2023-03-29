<?php

    class Ul extends HtmlObject {
        private $listaElementos = [];
       
        function addElemento($elemento) {
            $this->listaElementos[] = $elemento;
        }

        function addElementos($elementos) {
            foreach($elementos as $elemento) {
                $this->listaElementos[] = $elemento;
            }
        }

        function addArrayElementos($elementos) {
            $this->listaElementos = $elementos;
        }
       
        function __toString() {
            $ul = "<ul {$this->concatenaAtributos()}>";
            foreach($this->listaElementos as $iListaElementos){
                $ul .= $iListaElementos;
            }
            $ul .= "</ul>";
            return $ul;
        }
    }