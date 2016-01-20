<?php
/**
 * This file is part of the "bookReader" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */

namespace RCel\BookReader\Domain;

interface BookShelf
{
    public function getBook($title);
}
