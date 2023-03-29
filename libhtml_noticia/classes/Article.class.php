<?php
    class Article extends HtmlObject {
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
            $article = "<article {$this->concatenaAtributos()}>";
            foreach($this->listaElementos as $iListaElementos){
                $article .= $iListaElementos;
            }
            $article .= "</article>";
            return $article;
        }
    }