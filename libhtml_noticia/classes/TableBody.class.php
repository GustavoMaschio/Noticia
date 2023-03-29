<?php
    class TableBody extends HtmlObject {
        private $linhas;
        
        public function __construct($linhas) {
            $this->linhas = $linhas;
        }
        
        public function renderizar() {
            $html = "<tbody {$this->concatenaAtributos()}>";
            foreach($this->linhas as $linha) {
                $html .= $linha->renderizar();
            }
            $html .= "</tbody>";
            return $html;
        }
    }