<?php
    class Th extends HtmlObject {
        private $texto;
        
        public function __construct($texto) {
            $this->texto = $texto;
        }
        
        public function renderizar() {
            return "<th {$this->concatenaAtributos()}>{$this->texto}</th>";
        }
    }