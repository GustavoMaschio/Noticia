<?php
    class Header extends HtmlObject {
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
            $header = "<header {$this->concatenaAtributos()}>";
            foreach($this->listaElementos as $iListaElementos){
                $header .= $iListaElementos;
            }
            $header .= "</header>";
            return $header;
        }
    }