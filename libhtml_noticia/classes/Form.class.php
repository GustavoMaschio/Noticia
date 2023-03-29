<?php
    class Form extends HtmlObject {
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
            $form = "<form {$this->concatenaAtributos()}>";
            foreach($this->listaElementos as $iListaElementos){
                $form .= $iListaElementos;
            }
            $form .= "</form>";
            return $form;
        }
    }