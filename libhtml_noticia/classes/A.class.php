<?php
    class A extends HtmlObject {
        private $href;
        private $texto;

        function __construct($href, $texto)
        {
            $this->href = $href;
            $this->texto = $texto;
        }

        function __toString()
        {
            return "<a {$this->concatenaAtributos()} href=\"{$this->href}\">{$this->texto}</a>";
        }
    }