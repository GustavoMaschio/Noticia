<?php

class Input extends HtmlObject {
    
    private $type;
    private $value;

    function __construct($type, $value = null, $id = null)
    {
        $this->type = $type;
        $this->value = $value;
        parent::setId($id);
    }

    function __toString()
    {
        $id = parent::getId();
        return "<input {$this->concatenaAtributos()} type=\"{$this->type}\" 
        value=\"{$this->value}\">";
    }

}
