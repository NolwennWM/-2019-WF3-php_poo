<?php
class Car
{
    private $wheel = 4;
    private $brand;
    private $model;
    private $color;

    public function __construct($brand, $model){
        $this->brand = $brand;
        $this->model = $model;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }

    public function drive(){
        return "La voiture roule";
    }
    public function klaxon(){
        return "La cucaracha !";
    }
}

?>