<?php
    class P extends HtmlObject {
        private $texto;

        function __construct($texto) {
            $this->texto = $texto;
        }

        function __toString() {
            return "<p {$this->concatenaAtributos()}>{$this->texto}</p>";
        }
    }