<?php

class Dragon
{
    var $name;
    var $type;
    var $scale;

    function cry(){
        return "GRRRRRRRR !";
    }
    function eat(){
        return $this->name. ' mange.';
    }
}

?>