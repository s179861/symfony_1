<?php
/**
 * This file is part of the "bookReader" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */

namespace RCel;

class Container
{
    protected $s=array();
    function __set($k, $c) { $this->s[$k]=$c; }
    function __get($k) { return $this->s[$k]($this); }
}
