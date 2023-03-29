<?php
class Legend extends HtmlObject{
    private $texto;

    function __construct($texto)
    {
        $this->texto = $texto;
    }

    function __toString()
    {
        return "<legend {$this->concatenaAtributos()}>{$this->texto}</legend>";
    }
}