<?php
class Magus extends Character_Class
{
    public function __construct($name){
        parent::__construct($name);
        $this->magic *= 2;
    }
}

?>