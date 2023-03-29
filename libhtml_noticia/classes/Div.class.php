<?php
    class Div extends HtmlObject {
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
            $div = "<div {$this->concatenaAtributos()}>";
            foreach($this->listaElementos as $iListaElementos){
                $div .= $iListaElementos;
            }
            $div .= "</div>";
            return $div;
        }
    }