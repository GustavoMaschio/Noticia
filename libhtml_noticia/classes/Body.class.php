<?php

    class Body extends HtmlObject {
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
            $body = "<body {$this->concatenaAtributos()}>";
            foreach($this->listaElementos as $iListaElementos){
                $body .= $iListaElementos;
            }
            $body .= "</body>";
            return $body;
        }
    }