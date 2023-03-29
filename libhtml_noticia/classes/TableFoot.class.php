<?php
    class TableFoot extends HtmlObject {
        private $linha;
        
        public function __construct($linha) {
            $this->linha = $linha;
        }
        
        public function renderizar() {
            return "<tfoot {$this->concatenaAtributos()}>{$this->linha->renderizar()}</tfoot>";
        }
    }