<?php

class Option extends HtmlObject {
    private $texto;
    
    function __construct($texto) {
        $this->texto = $texto;
    }
    
    public function __toString() {
        return "<option {$this->concatenaAtributos()}>{$this->texto}</option>";
    }
    
}
