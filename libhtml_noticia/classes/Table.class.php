<?php
    class Table extends HtmlObject {
        private $thead;
        private $tbody;
        private $tfoot;
        
        public function __construct($tbody, $thead = null, $tfoot = null) {
            $this->thead = $thead;
            $this->tbody = $tbody;  
            $this->tfoot = $tfoot;
        }
        
        public function renderizar() {
            $html = "<table {$this->concatenaAtributos()}>";
            if ($this->thead) {
                $html .= $this->thead->renderizar();
            }
            if ($this->tbody) {
                $html .= $this->tbody->renderizar();
            }
            if ($this->tfoot) {
                $html .= $this->tfoot->renderizar();
            }
            $html .= "</table>";
            return $html;
        }

        public function __toString() {
            $html = "<table {$this->concatenaAtributos()}>";
            if ($this->thead) {
                $html .= $this->thead->renderizar();
            }
            if ($this->tbody) {
                $html .= $this->tbody->renderizar();
            }
            if ($this->tfoot) {
                $html .= $this->tfoot->renderizar();
            }
            $html .= "</table>";
            return $html;
        }
        
    }