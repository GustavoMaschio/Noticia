<?php

class Strong extends HtmlObject {
    
    private $texto;
    
    public function __toString() {
        return "<strong {$this->concatenaAtributos()}>{$this->texto}</strong>";
    }
    
}
