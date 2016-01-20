<?php
/**
 * This file is part of the "bookReader" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */

namespace RCel\BookReader\Domain;

class Book 
{
    private $title;
    private $pages;

    public function __construct($title, array $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function read($pageNumber)
    {
        if (!array_key_exists($pageNumber, $this->pages)) {
            throw new \Exception(sprintf('%s page does not exist'));
        }

        return $this->pages[$pageNumber]->content();
    }
    
    public function getPageQuantity() {
        return count($this->pages);
    }
}
