<?php
namespace Webforce\RPG\Character;
use \Webforce\RPG\Utils\Character\Character_Class;

class Warrior extends Character_Class
{
    public function __construct($name){
        parent::__construct($name);
        $this->strenght *= 2;
    }
}

?>