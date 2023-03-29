<?php

class Script extends HtmlObject {
    
    private $type;
    private $src;
    
    function __construct($type = "text/javascript", $src) {
        $this->type = $type;
        $this->src = $src;
    }
    
    public function __toString() {
        return "<script {$this->concatenaAtributos()} type=\"{$this->type}\" src=\"{$this->src}\"></script>";
    }
    
}
