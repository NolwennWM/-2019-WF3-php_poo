<?php
class form implements form2D
{
    protected $area=0;
    protected $perimeter=0;
    public function add(form2D $form)
    {
        $this->area += $form->area();
        $this->perimeter += $form->perimeter();
        return $this;
    }
    public function area(){
        return $this->area;
    }
    public function perimeter(){
        return $this->perimeter;
    }
}
?>