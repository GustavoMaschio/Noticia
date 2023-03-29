<?php
    class Img extends HtmlObject {
        private $src;
        private $height;
        private $width;
        
        function __construct($src, $height, $width)
        {
            $this->src = $src;
            $this->height = $height;
            $this->width = $width;
        }

        function __toString()
        {
            return "<img {$this->concatenaAtributos()} src=\"{$this->src}\" 
            height=\"{$this->height}\" width=\"{$this->width}\">";
        }
    }