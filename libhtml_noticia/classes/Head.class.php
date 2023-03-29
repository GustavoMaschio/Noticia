<?php
    class Head extends HtmlObject {
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
            $head = "<head {$this->concatenaAtributos()}>";
            foreach($this->listaElementos as $iListaElementos){
                $head .= $iListaElementos;
            }
            $head .= "</head>";
            return $head;
        }
    }