<?php
    class Html extends HtmlObject {
        private $lang;
        private $listaElementos = [];

        function __construct($lang) {
            if($lang){$this->lang = $lang;} else {$this->lang = "pt-br";};
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
            $html = "<!DOCTYPE html><html {$this->concatenaAtributos()} lang=\"{$this->lang}\">";
            foreach($this->listaElementos as $iListaElementos){
                $html .= $iListaElementos;
            }
            $html .= "</html>";
            return $html;
        }
    }