<?php

    class Ol extends HtmlObject {
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
            $ol = "<ol {$this->concatenaAtributos()}>";
            foreach($this->listaElementos as $iListaElementos){
                $ol .= $iListaElementos;
            }
            $ol .= "</ol>";
            return $ol;
        }
    }