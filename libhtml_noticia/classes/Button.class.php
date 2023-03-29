<?php

    class Button extends HtmlObject {
        
        private $type;
        private $texto;

        function __construct($type, $texto)
        {
            $this->type = $type;
            $this->texto = $texto;
        }

        function __toString()
        {
            return "<button {$this->concatenaAtributos()} type=\"{$this->type}\">{$this->texto}</button>";
        }
        
    }
