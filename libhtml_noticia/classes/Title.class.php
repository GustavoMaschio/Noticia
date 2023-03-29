<?php

    class Title extends HtmlObject {
        private $texto;

        function __construct($texto) {
            $this->texto = $texto;
        }

        function __toString() {
            return "<title {$this->concatenaAtributos()}>{$this->texto}</title>";
        }
    }