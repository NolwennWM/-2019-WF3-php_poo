<?php

class Warrior extends Character_Class
{
    public function __construct($name){
        parent::__construct($name);
        $this->strenght *= 2;
    }
}

?>