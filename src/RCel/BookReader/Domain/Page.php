<?php

namespace RCel\BookReader\Domain;

class Page 
{
    private $content;

    function __construct($content)
    {
        $this->content = $content;
    }

    public function content()
    {
        return $this->content;
    }
}
