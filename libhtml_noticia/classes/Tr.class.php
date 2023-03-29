<?php
    class Tr extends HtmlObject {
        private $celulas;
        
        public function __construct($celulas) {
            $this->celulas = $celulas;
        }
        
        public function renderizar() {
            $html ="<tr {$this->concatenaAtributos()}>";
            foreach($this->celulas as $celula) {
                $html .= $celula->renderizar();
            }
            $html.="</tr>";
            return $html;
        }
    }