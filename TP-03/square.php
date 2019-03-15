<?php

class Square extends Rectangle
{
    public function __construct($s)
    {
        parent::__construct($s, $s);
    }
}
?>