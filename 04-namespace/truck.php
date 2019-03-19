<?php
namespace Parking\Pro;
use \Parking\Car;

class Truck
{
    public function __construct()
    {
        new \Parking\Car();
        new Car();
    }
}

?>