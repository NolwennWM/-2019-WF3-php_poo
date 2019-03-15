<?php

class Circle implements form2D
{
    protected $R;
    public function __construct($r)
    {
        $this->R = $r;
    }
    public function area()
    {
        return round($this->R**2 *pi(), 2);
    }
    public function perimeter()
    {
        return round($this->R*2*pi(), 2);
    }
}
?>