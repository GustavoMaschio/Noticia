<?php
    class Label extends HtmlObject {
        private $texto;
        private $for;

        function __construct($texto, $for) {
            $this->texto = $texto;
            $this->for = $for;
        }

        function __toString() {
            return "<label {$this->concatenaAtributos()} \"{$this->for}\">{$this->texto}</label>";
        }
    }