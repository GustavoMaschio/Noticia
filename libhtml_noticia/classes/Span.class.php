<?php

class Span extends HtmlObject{
    
    private $value;
    
    function __construct($value) {
        $this->value = $value;
    }

    function __toString() {
        return "<span {$this->concatenaAtributos()}>{$this->value}</span>";
    }
    
}
