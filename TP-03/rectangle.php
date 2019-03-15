<?php

class Rectangle implements form2D 
{
    protected $sideA;
    protected $sideB;

    public function __construct($sA, $sB)
    {
        $this->sideA = $sA;
        $this->sideB = $sB;
    }
    public function area()
    {
        return $this->sideA * $this->sideB;
    }
    public function perimeter()
    {
        return ($this->sideA + $this->sideB) *2;
    }
}
?>