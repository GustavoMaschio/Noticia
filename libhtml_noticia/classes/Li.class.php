<?php
    class Li extends HtmlObject {
        private $texto;
        private $listaElementos = [];

        function __construct($texto = null) {
            $this->texto = $texto;
        }

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
            if ($this->texto) {
                return "<li {$this->concatenaAtributos()}>{$this->texto}</li>";
            } else {
                $li = "<li {$this->concatenaAtributos()}>";
                foreach($this->listaElementos as $iListaElementos){
                    $li .= $iListaElementos;
                }
                $li .= "</li>";
                return $li;
            }
        }
    }