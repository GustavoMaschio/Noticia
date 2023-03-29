<?php

class Select extends HtmlObject{
    
    private $listaElementos = [];
    
    function addElemento($elemento) {
        $this->listaElementos[] = $elemento;
    }

    function addElementos($elementos) {
        foreach($elementos as $elemento) {
            $this->listaElementos[] = $elemento;
        }
    }

    function addArrayElementos($elementos) {
        $this->listaElementos = $elementos;
    }

    function __toString() {
        $select = "<select {$this->concatenaAtributos()}>";
        foreach($this->listaElementos as $iListaElementos){
            $select .= $iListaElementos;
        }
        $select .= "</select>";
        return $select;
    }
    
}
