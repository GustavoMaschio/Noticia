<?php
    class Section extends HtmlObject {
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
            $section = "<section {$this->concatenaAtributos()}>";
            foreach($this->listaElementos as $iListaElementos){
                $section .= $iListaElementos;
            }
            $section .= "</section>";
            return $section;
        }
    }