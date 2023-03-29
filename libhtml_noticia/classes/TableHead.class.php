<?php
    class TableHead extends HtmlObject {
        private $linha;
        
        public function __construct($linha) {
            $this->linha = $linha;
        }
        
        public function renderizar() {
            return "<thead {$this->concatenaAtributos()}>{$this->linha->renderizar()}</thead>";
            
        }
    }