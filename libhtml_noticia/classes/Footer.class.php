<?php
    class Footer extends HtmlObject {
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
            $footer = "<footer {$this->concatenaAtributos()}>";
            foreach($this->listaElementos as $iListaElementos){
                $footer .= $iListaElementos;
            }
            $footer .= "</footer>";
            return $footer;
        }
    }