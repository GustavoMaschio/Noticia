<?php
    class Fieldset extends HtmlObject {
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
            $fieldset = "<fieldset {$this->concatenaAtributos()}>";
            foreach($this->listaElementos as $iListaElementos){
                $fieldset .= $iListaElementos;
            }
            $fieldset .= "</fieldset>";
            return $fieldset;
        }
    }