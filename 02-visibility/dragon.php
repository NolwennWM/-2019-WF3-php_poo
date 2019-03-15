<?php

class Dragon
{
    private $name;
    protected $type;
    public   $scale;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    function cry(){
        return "GRRRRRRRR !";
    }
    function eat(){
        return $this->name. ' mange.';
    }
}

?>