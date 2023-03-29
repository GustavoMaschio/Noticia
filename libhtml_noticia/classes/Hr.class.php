<?php
    class Hr extends HtmlObject {

        function __toString() {
            return "<hr {$this->concatenaAtributos()}>";
        }
    }