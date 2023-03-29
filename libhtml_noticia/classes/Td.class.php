<?php
    class Td extends HtmlObject {
        private $texto;
        
        public function __construct($texto) {
            $this->texto = $texto;
        }

        public function renderizar() {
            return "<td {$this->concatenaAtributos()}>{$this->texto}</td>";
        }
    }