<?php

    class Meta extends HtmlObject {
        private $charset;
        private $httpequiv;
        private $content;
        private $name;

        function __construct($charset, $httpequiv, $content, $name) {
            if ($charset) {$this->charset = $charset;};
            if ($httpequiv) {$this->httpequiv = $httpequiv;};
            if ($content) {$this->content = $content;};
            if ($name) {$this->name = $name;};
        }

        function __toString() {
            return "<meta {$this->concatenaAtributos()} charset=\"{$this->charset}\" 
                          httpequiv=\"{$this->httpequiv}\" 
                          content=\"{$this->content}\" 
                          name=\"{$this->name}\">";
        }
    }