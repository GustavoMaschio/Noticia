<?php

    class Link extends HtmlObject {

        private $rel;
        private $type;
        private $href;
        
        public function __construct($rel = "stylesheet", $type = "text/css", $href) {
            $this->rel = $rel;
            $this->type = $type;
            $this->href = $href;
        }
        
        public function __toString() {
            return "<link {$this->concatenaAtributos()} rel=\"{$this->rel}\"type=\"{$this->type}\" href=\"{$this->href}\">";
        }
        
    }
