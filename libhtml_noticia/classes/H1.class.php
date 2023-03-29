<?php
    class H1 extends HtmlObject {
        private $texto;

        function __construct($texto) {
            $this->texto = $texto;
        }

        function __toString() {
            return "<h1 {$this->concatenaAtributos()}>{$this->texto}</h1>";
        }
    }