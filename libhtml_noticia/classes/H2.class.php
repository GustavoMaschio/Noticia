<?php
    class H2 extends HtmlObject {
        private $texto;

        function __construct($texto) {
            $this->texto = $texto;
        }

        function __toString() {
            return "<h2 {$this->concatenaAtributos()}>{$this->texto}</h2>";
        }
    }