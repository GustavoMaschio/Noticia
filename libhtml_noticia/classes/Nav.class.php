<?php

    class Nav extends HtmlObject {
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
            $nav = "<nav {$this->concatenaAtributos()}>";
            foreach($this->listaElementos as $iListaElementos){
                $nav .= $iListaElementos;
            }
            $nav .= "</nav>";
            return $nav;
        }
    }
